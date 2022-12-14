<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class article_company extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 6; $i < 100; $i++)
        {
            DB::table("article_company")->insert(
                [
                ["id_fields_career" => random_int(1,25),
                "id_level" => random_int(1,9),
                "id_company" => $i,
                "id_city" => '01',
                "title" => "Tuyển lập trình viên PHP",
                "request" => "Yêu cầu thành thạo PHP cơ bản",
                "address_work" => "93/5 sông cầu",
                "status_address" => 1,
                "salary_from" => random_int(1000000,50000000),
                "salary_to" => random_int(1100000,70000000),
                "status_salary" => 1,
                "date_accept_profile" => date("Y-m-d"),
                "gender" => 1,
                "age_from" => 18,
                "age_to" => 22,
                "experience" => 2,
                "description_work" => "Làm dự án thực tạo website",
                "description_other" => "",
                "status" => 1],

            ]);
        }
    }
}