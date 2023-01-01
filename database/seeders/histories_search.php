<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class histories_search extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = array("c++", "php", "laravel", "c#", "frontend", "backend");

        for($i = 0; $i < 300; $i++){
            DB::table("histories_search")->insert([
                'id_account' => random_int(10,200),
                'content' => $arr[array_rand($arr, 1)],
                'created_at' => date("Y-m-d"),
            ]);
        }
    }
}