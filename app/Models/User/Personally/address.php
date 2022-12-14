<?php

namespace App\Models\User\Personally;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class address extends Model
{
    use HasFactory;

    public function getCity()
    {
        $result = DB::table('province_city')->get();

        return $result;
    }

    public function detDistrict($matp)
    {
        $result = DB::table('district')
            ->where("matp", $matp)
            ->get();

        return $result;
    }

    public function detTown($maqh)
    {
        $result = DB::table('district')
            ->where("maqh", $maqh)
            ->get();

        return $result;
    }
}
