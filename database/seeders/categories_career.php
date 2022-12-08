<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class categories_career extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories_career")->insert([
            ["name" => "BÁN HÀNG / TIẾP THỊ"],
            ["name" => "MÁY TÍNH / CÔNG NGHỆ THÔNG TIN"],
            ["name" => "KỸ THUẬT"],
            ["name" => "SẢN XUẤT"],
            ["name" => "DỊCH VỤ"],
            ["name" => "HÀNH CHÍNH / NHÂN SỰ"],
            ["name" => "GIÁO DỤC / ĐÀO TẠO"],
            ["name" => "XÂY DỰNG"],
            ["name" => "KẾ TOÁN / TÀI CHÍNH"],
            ["name" => "CHĂM SÓC SỨC KHỎE"],
            ["name" => "TRUYỀN THÔNG / MEDIA"],
            ["name" => "KHOA HỌC"],
            ["name" => "KHÁCH SẠN / DU LỊCH"],
            ["name" => "HÀNG TIÊU DÙNG"],
            ["name" => "NHÓM NGÀNH KHÁC"],
        ]);
    }
}