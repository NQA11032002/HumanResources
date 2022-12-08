<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class position extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("position")->insert([
            ["name" => "Kinh nghiệm dưới 2 năm"],
            ["name" => "Chuyên viên / Nhân viên"],
            ["name" => "Quản lý / Trưởng phòng"],
            ["name" => "Leader / Trưởng nhóm"],
            ["name" => "Giám đốc điều hành"],
            ["name" => "Giám đốc tài chính"],
            ["name" => "Giám đốc Marketing"],
            ["name" => "Giám đốc pháp lý"],
            ["name" => "Giám đốc thương mại"],
            ["name" => "Giám đốc vận hành"],
            ["name" => "Giám đốc / Tổng giám đốc"],

        ]);
    }
}