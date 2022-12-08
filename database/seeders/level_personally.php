<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class level_personally extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("level_personally")->insert([
            ["name" => "Sinh viên / Thực tập sinh"],
            ["name" => "Mới tốt nghiệp"],
            ["name" => "Nhân viên"],
            ["name" => "Trưởng nhóm / Giám sát"],
            ["name" => "Quản lý"],
            ["name" => "Giám đốc"],
            ["name" => "Phó giám đốc"],
            ["name" => "Tổng giám đốc"],
            ["name" => "Chủ tịch / Phó chủ tịch"],
        ]);
    }
}