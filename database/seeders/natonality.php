<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class natonality extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("nationality")->insert([
            ["name" => "Người Việt Nam"],
            ["name" => "Người Bangladesh"],
            ["name" => "Người Campuchia"],
            ["name" => "Người Canada"],
            ["name" => "Người Công gô"],
            ["name" => "Người Hoa Kỳ"],
            ["name" => "Người Hàn Quốc"],
            ["name" => "Người Hồng Kong"],
            ["name" => "Người Lào"],
            ["name" => "Người Malaysia"],
            ["name" => "Người Myanmar"],
            ["name" => "Người Nhật"],
            ["name" => "Người Qatar"],
            ["name" => "Người Singapore"],
            ["name" => "Người Trung Quốc"],
            ["name" => "Người Ukraine"],
            ["name" => "Người Nga"],
            ["name" => "Người Úc"],
            ["name" => "Người Đài Loan"],
            ["name" => "Quốc tịch khác"],
        ]);
    }
}