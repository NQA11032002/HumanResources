<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class software_skill_personally extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("software_skill_personally")->insert([
            ["name" => "Kỹ năng lắng nghe"],
            ["name" => "Kỹ năng giao tiếp"],
            ["name" => "Kỹ năng quản lý thời gian"],
            ["name" => "Kỹ năng giải quyết vấn đề"],
            ["name" => "Kỹ năng làm việc nhóm"],
            ["name" => "Khả năng linh hoạt, thích nghi nhanh với thay đổi"],
            ["name" => "Kỹ năng làm việc dưới áp lực"],
        ]);
    }
}