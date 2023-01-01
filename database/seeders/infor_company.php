<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class infor_company extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 106; $i < 205; $i++) {
            DB::table("infor_company")->insert([
                [
                    "id_account" => $i,
                    "id_career" => rand(1, 15),
                    "amount_staff" => "01",
                    "name" => "Quoc em",
                    "website" => "",
                    "taxid" => "",
                    "logo" => "images/Logo.jpg",
                    "description" => "Công ty TNHH Nissho Electronics Việt Nam (Nissho Việt Nam) là công ty con của Nissho Electronics Corporation – thành viên chuyên về công nghệ thông tin của Tập đoàn Sojitz (top 5 tập đoàn thương mại đầu tư lớn nhất Nhật Bản).
                Nissho Việt Nam thành lập từ tháng 8 năm 2011 tập trung vào các mảng sau:
                -    Phát triển phần mềm (outsource web/app) cho các tập đoàn lớn của Nhật Bản
                -    Nghiên cứu và ứng dụng các công nghệ mới (AI, AWS, Microsoft Azure,…) để cung cấp các sản phẩm (product) và dịch vụ (service) cho thị trường Việt Nam, Nhật Bản, Âu Mỹ,.. ",
                    "link_video" => "",
                    "image_1" => "",
                    "image_2" => "",
                    "image_3" => "",
                    "status" => 1
                ],

            ]);
        }
    }
}