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
        for ($i = 1; $i < 200; $i++) {
            DB::table("infor_personally")->insert([
                [
                    "id_account" => $i,
                    "id_nationality" => random_int(1, 20),
                    "id_city" => "01",
                    "id_district" => "001",
                    "id_software_skill" => random_int(1, 7),
                    "firstname" => "Anh",
                    "lastname" => "Nguyễn Quốc",
                    "birthday" => "2022-11-03",
                    "gender" => 1,
                    "phone" => "0987702523",
                    "address" => "96 Chung cu lamer 2",
                    "profession" => "Công nghệ thông tin",
                    "image" => "",
                    "status_profile" => 1
                ],
            ]);
        }
    }
}