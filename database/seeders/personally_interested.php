<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class personally_interested extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 10; $i < 100; $i++)
        {
            DB::table("personally_interested")->insert([
                ["id_account" => $i,
                "id_article" => random_int(24,100),
                "create_at" => date('Y-m-d'),

                ],
            ]);
        }
    }
}
