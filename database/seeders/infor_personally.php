<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class infor_personally extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("infor_personally")->insert([
            ["id_account" => 4,
            "id_nationality" => 4,
            "id_city" => "01",
            "id_district" => "001",
            "id_software_skill" => "5",
            "firstname" => "Anh",
            "lastname" => "Nguyễn Quốc",
            "birthday" => "2022-11-03",
            "gender" => 1,
            "phone" => "0987702523",
            "address" => "96 Chung cu lamer 2",
            "profession" => "Công nghệ thông tin",
            "image" => "",
            "status_profile" => 1],
            ["id_account" => 5,
            "id_nationality" => 5,
            "id_city" => "02",
            "id_district" => "002",
            "id_software_skill" => "5",
            "firstname" => "Anh",
            "lastname" => "Nguyễn Quốc",
            "birthday" => "2022-11-03",
            "gender" => 0,
            "phone" => "0987702523",
            "address" => "96 Chung cu lamer 2",
            "profession" => "Công nghệ thông tin",
            "image" => "",
            "status_profile" => 1],
        ]);
    }
}