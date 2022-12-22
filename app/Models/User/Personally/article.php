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
                    ->join('type_work as tw', 'art.id_typework', '=', 'tw.id')
                    ->select('tw.name as name_Tyework', 'art.id', 'cp.logo', 'cp.name', 'art.title', 'art.created_at', 'art.updated_at', 'art.address_work', 'art.salary_from', 'art.salary_to', 'art.experience')
                    ->where("art.salary_from", '>=', 15000000)
                    ->where("art.status", 1)
                    ->paginate($amountPage);
            } else if ($typeWork == "new") {
                $result = DB::table("article_company as art")
                    ->join('infor_company as cp', 'art.id_company', '=', 'cp.id')
                    ->join('type_work as tw', 'art.id_typework', '=', 'tw.id')
                    ->select('tw.name as name_Tyework', 'art.id', 'cp.logo', 'cp.name', 'art.title', 'art.created_at', 'art.updated_at', 'art.address_work', 'art.salary_from', 'art.salary_to', 'art.experience')
                    ->where('art.status', 1)
                    ->orderBy('art.created_at', 'desc')
                    ->orderBy('art.updated_at', 'desc')
                    ->paginate($amountPage);
            } else {
                $result = DB::table("personally_interested as itr")
                    ->join("article_company as art", 'itr.id_article', '=', 'art.id')
                    ->join("infor_company as cp", 'art.id_company', '=', 'cp.id')
                    ->join('type_work as tw', 'art.id_typework', '=', 'tw.id')
                    ->select('tw.name as name_Tyework', 'art.id', 'cp.logo', 'cp.name', 'art.title', 'art.created_at', 'art.updated_at', 'art.address_work', 'art.salary_from', 'art.salary_to', 'art.experience')
                    ->where('art.status', 1)
                    ->groupBy('itr.id_article', 'cp.logo', 'tw.name', 'art.experience', 'cp.name', 'art.created_at', 'art.updated_at', 'art.title', 'art.id', 'art.address_work', 'art.salary_from', 'art.salary_to')
                    ->having(DB::raw("count(id_article)"), '>=', 3)
                    ->paginate($amountPage);
            }
        }

        return $result;
    }

    public function getPosts($amountPage, $page, $keywords = null, $address = null, $sort_date = null, $sort_salary = null, $typeworks = null, $experiences_from = null, $experiences_to = null, $categories = null, $field_career = null)
    {
        $result = $this->getQuery($keywords, $address, $sort_date, $sort_salary, $typeworks, $experiences_from, $experiences_to, $categories, $field_career);

        $result = $result->skip($page * $amountPage)->take($amountPage)->get();

        return $result;
    }

    public function getPaginationPost($amountPage, $keywords = null, $address = null, $sort_date = null, $sort_salary = null, $typeworks = null, $experiences_from = null, $experiences_to = null, $categories = null, $field_career = null)
    {
        $result = $this->getQuery($keywords, $address, $sort_date, $sort_salary, $typeworks, $experiences_from, $experiences_to, $categories, $field_career);

        $result = $result->paginate($amountPage);

        return $result;
    }

    public function getQuery($keywords = null, $address = null, $sort_date = null, $sort_salary = null, $typeworks = null, $experiences_from = null, $experiences_to = null, $categories = null, $field_career = null)
    {
        $result = DB::table("article_company as art")
            ->join('infor_company as cp', 'art.id_company', '=', 'cp.id')
            ->join('type_work as tw', 'art.id_typework', '=', 'tw.id')
            ->select('tw.name as name_Tyework', 'art.id', 'cp.logo', 'cp.name', 'art.title', 'art.created_at', 'art.updated_at', 'art.address_work', 'art.salary_from', 'art.salary_to', 'art.experience');

        if (!empty($keywords)) {
            $result = $result->where('art.title', 'like', '%' . $keywords . '%');
        }

        if (!empty($address) && $address != 0) {
            $result = $result->where('art.id_city', $address);
        }

        if (!empty($sort_date)) {
            if ($sort_date == 0) {
                $result = $result->whereDate('art.created_at', date("Y-m-d"))
                    ->orWhereDate('art.updated_at', date("Y-m-d"));
            } else if ($sort_date == 1) {
                $result = $result->orderBy('art.created_at', 'asc')->orderBy('art.updated_at', 'asc');
            }
        }

        if (!empty($sort_salary)) {
            $result = $result->where("art.salary_from", '>=', $sort_salary);
        }

        if (!empty($typeworks)) {
            $result = $result->whereIn("art.id_typework", $typeworks);
        }

        if (!empty($experiences_from) && !empty($experiences_to)) {
            $result = $result->whereBetween("art.experience", [$experiences_from, $experiences_to]);
        }

        if (!empty($categories)) {
            $result = $result->whereIn("art.id_career", $categories);
        }

        if (!empty($field_career)) {
            $result = $result->whereIn("art.id_fields_career", $field_career);
        }

        return $result;
    }

    //lấy tổng số bài tuyển dụng công việc theo ngành nghề
    public function getSumWorkByCareer()
    {
        $result = DB::table('article_company as art')
            ->select(DB::raw("count(id_career) as sum"), "id_career")
            ->groupBy("id_career")
            ->orderBy("id_career")
            ->get();

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

    //lấy danh sách từ tìm kiếm hot
    public function getWordHot()
    {
        $result = DB::table("histories_search")
            ->select("content")
            ->groupBy("content")
            ->orderBy(DB::raw("count(id)"), 'desc')
            ->skip(0)->take(3)
            ->get();

        return $result;
    }

    //Lấy từ khóa tìm kiếm gần đây theo tài khoản
    public function getWordNearly($id_account)
    {
        $result = DB::table("histories_search")
            ->where("id_account", $id_account)
            ->orderBy('id', 'desc')
            ->first("content");

        return $result;
    }

    //thêm từ khóa tìm kiếm vào lịch sử tìm kiếm
    public function insertSearch($id_account, $keyword, $created_at)
    {
        DB::table("histories_search")->insert([
            "id_account" => $id_account,
            "content" => $keyword,
            "created_at" => $created_at,
        ]);
    }
}