<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Random;

class account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("account")->insert([
            ["id_roles" => 1, "email" => "quocem@gmail.com", "passwords" => rand(1, 50),"status" => 1],
            ["id_roles" => 2, "email" => "quocem1@gmail.com", "passwords" => rand(1, 50),"status" => 1],
            ["id_roles" => 1, "email" => "quocem2@gmail.com", "passwords" => rand(1, 50),"status" => 1],
        ]);
    }
}