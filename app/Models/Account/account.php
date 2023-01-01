<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class account extends Model
{
    use HasFactory;

    public function checkAccount($email, $password)
    {
        $result = DB::table("account as ac")
            ->where('ac.email', $email)
            ->where('ac.passwords', $password)
            ->first();

        if (!empty($result)) {
            $infor = "";

            if ($result->id_roles === 1) {
                return $result->id_roles;
            } else if ($result->id_roles === 2) {
                $infor = DB::table("infor_personally as if")
                    ->where("if.id_account", "$result->id")
                    ->get();
            } else if ($result->id_roles === 3) {
                $infor = DB::table("infor_company as if")
                    ->where("if.id_account", "$result->id")
                    ->get();
            }

            return $infor;
        }
    }

    public function registerAccount($id_roles, $email, $password, $status)
    {
        $result = DB::table("account")->insertGetId([
            'id_roles' => $id_roles,
            'email' => $email,
            'passwords' => $password,
            'status' => $status,
            'created_at' => date('Y-m-d')
        ]);

        return $result;
    }

    public function activeAccount($email, $status)
    {
        DB::table("account")->where("email", $email)->update([
            "status" => $status
        ]);
    }

    public function registerInfor($id_account, $firstName, $lastName, $image)
    {
        DB::table("infor_personally")->insert([
            "id_account" => $id_account,
            "firstname" => $firstName,
            "lastname" => $lastName,
            "image" => $image,
        ]);
    }

    public function checkEmail($email)
    {
        $result = DB::table("account")->where("email", $email)->first();

        return $result;
    }
}