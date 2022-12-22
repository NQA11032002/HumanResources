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
        $result = DB::table("account")
            ->where('email', $email)
            ->where('passwords', $password)
            ->first();

        return $result;
    }
}