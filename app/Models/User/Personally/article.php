<?php

namespace App\Models\User\Personally;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class article extends Model
{
    use HasFactory;

    public function getWorks($amountPage, $typeWork = null)
    {
        if (!empty($typeWork)) {
            if ($typeWork == "vip") {
                $result = DB::table("article_company as art")
                    ->join('infor_company as cp', 'art.id_company', '=', 'cp.id')
                    ->select('art.id', 'cp.logo', 'cp.name', 'art.title', 'art.created_at', 'art.updated_at', 'art.address_work', 'art.salary_from', 'art.salary_to')
                    ->where("art.salary_from", '>=', 15000000)
                    ->where("art.status", 1)
                    ->paginate($amountPage);
            } else if ($typeWork == "new") {
                $result = DB::table("article_company as art")
                    ->join('infor_company as cp', 'art.id_company', '=', 'cp.id')
                    ->select('art.id', 'cp.logo', 'cp.name', 'art.title', 'art.created_at', 'art.updated_at', 'art.address_work', 'art.salary_from', 'art.salary_to')
                    ->where('art.status', 1)
                    ->orderBy('art.created_at', 'desc')
                    ->orderBy('art.updated_at', 'desc')
                    ->paginate($amountPage);
            } else {
                $result = DB::table("personally_interested as itr")
                    ->join("article_company as art", 'itr.id_article', '=', 'art.id')
                    ->join("infor_company as cp", 'art.id_company', '=', 'cp.id')
                    ->select('itr.id_article', 'cp.logo', 'cp.name', 'art.title', 'art.created_at', 'art.updated_at', 'art.id', 'art.address_work', 'art.salary_from', 'art.salary_to')
                    ->where('art.status', 1)
                    ->groupBy('itr.id_article', 'cp.logo', 'cp.name', 'art.created_at', 'art.updated_at', 'art.title', 'art.id', 'art.address_work', 'art.salary_from', 'art.salary_to')
                    ->having(DB::raw("count(id_article)"), '>=', 3)
                    ->paginate($amountPage);
            }
        } else {
            $result = DB::table("article_company as art")
                ->join('infor_company as cp', 'art.id_company', '=', 'cp.id')
                ->select('art.id', 'cp.logo', 'cp.name', 'art.title', 'art.created_at', 'art.updated_at', 'art.address_work', 'art.salary_from', 'art.salary_to')
                ->paginate($amountPage);
        }

        return $result;
    }

    //Lấy danh sách hình thức việc
    public function getTypeWork()
    {
        $result = DB::table("type_work")->get();

        return $result;
    }

    //Lấy danh mục công việc
    public function getCareer()
    {
        $result = DB::table("categories_career")->get();

        return $result;
    }
}