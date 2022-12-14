<?php

namespace App\Models\User\Personally;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class interested extends Model
{
    use HasFactory;

    //Lấy danh sách tuyển dụng quan tâm theo tài khoản
    public function getInterests($id_account)
    {
        $result = DB::table("personally_interested as itr")->select("id_article")
            ->where("id_account", $id_account)->get()->toArray();

        return $result;
    }

    public function postSaved($id_account, $id_article)
    {
        DB::table("personally_interested")->insert([
            'id_account' => $id_account,
            'id_article' => $id_article,
        ]);
    }

    public function postUnsaved($id_account, $id_article)
    {
        DB::table("personally_interested")
            ->where("id_account", $id_account)
            ->where("id_article", $id_article)
            ->delete();
    }
}