<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class field_career extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("field_career")->insert([
            ["id_career" => 1, "name" => "Bán lẻ / Bán sỉ"],
            ["id_career" => 1, "name" => "Tiếp thị trực tuyến"],
            ["id_career" => 1, "name" => "Tiếp thị / Marketing"],
            ["id_career" => 1, "name" => "Bán hàng / Kinh doanh"],
            ["id_career" => 2, "name" => "CNTT - Phần cứng / Mạng"],
            ["id_career" => 2, "name" => "CNTT - Phần mềm"],
            ["id_career" => 3, "name" => "Cơ khí / Ô tô / Tự động hóa"],
            ["id_career" => 3, "name" => "Điện / Điện tử / Điện lạnh"],
            ["id_career" => 3, "name" => "Hóa học"],
            ["id_career" => 3, "name" => "Môi trường"],
            ["id_career" => 3, "name" => "Dầu khí"],
            ["id_career" => 3, "name" => "Khoáng sản"],
            ["id_career" => 3, "name" => "Bảo trì / Sửa chữa"],
            ["id_career" => 4, "name" => "Thu mua / Vật tư"],
            ["id_career" => 4, "name" => "Sản xuất / Vận hành sản xuất"],
            ["id_career" => 4, "name" => "Xuất nhập khẩu"],
            ["id_career" => 4, "name" => "Dệt may / Da giày / Thời trang"],
            ["id_career" => 4, "name" => "In ấn / Xuất bản"],
            ["id_career" => 4, "name" => "An toàn lao động"],
            ["id_career" => 4, "name" => "Quản lý chất lượng (QA/QC)"],
            ["id_career" => 4, "name" => "Đồ gỗ"],
            ["id_career" => 5, "name" => "Phi chính phủ / Phi lợi nhuận"],
            ["id_career" => 5, "name" => "Vận chuyển / Giao nhận / Kho vận"],
            ["id_career" => 5, "name" => "Lao động phổ thông"],
            ["id_career" => 5, "name" => "Dịch vụ khách hàng"],
            ["id_career" => 5, "name" => "Tư vấn"],
            ["id_career" => 5, "name" => "An Ninh / Bảo Vệ"],
            ["id_career" => 5, "name" => "Bưu chính viễn thông"],
            ["id_career" => 5, "name" => "Luật / Pháp lý"],
            ["id_career" => 6, "name" => "Biên phiên dịch"],
            ["id_career" => 6, "name" => "Hành chính / Thư ký"],
            ["id_career" => 6, "name" => "Nhân sự"],
            ["id_career" => 6, "name" => "Quản lý điều hành"],
            ["id_career" => 7, "name" => "Thư viện"],
            ["id_career" => 7, "name" => "Giáo dục / Đào tạo"],
            ["id_career" => 8, "name" => "Nội ngoại thất"],
            ["id_career" => 8, "name" => "Bất động sản"],
            ["id_career" => 8, "name" => "Kiến trúc"],
            ["id_career" => 8, "name" => "Xây dựng"],
            ["id_career" => 8, "name" => "Bảo hiểm"],
            ["id_career" => 9, "name" => "Chứng khoán"],
            ["id_career" => 9, "name" => "Tài chính / Đầu tư"],
            ["id_career" => 9, "name" => "Kế toán / Kiểm toán"],
            ["id_career" => 9, "name" => "Ngân hàng"],
            ["id_career" => 10, "name" => "Dược phẩm"],
            ["id_career" => 10, "name" => "Y tế / Chăm sóc sức khỏe"],
            ["id_career" => 11, "name" => "Quảng cáo / Đối ngoại / Truyền Thông"],
            ["id_career" => 11, "name" => "Giải trí"],
            ["id_career" => 11, "name" => "Mỹ thuật / Nghệ thuật / Thiết kế"],
            ["id_career" => 11, "name" => "Truyền hình / Báo chí / Biên tập"],
            ["id_career" => 11, "name" => "Tổ chức sự kiện"],
            ["id_career" => 12, "name" => "Lâm Nghiệp"],
            ["id_career" => 12, "name" => "Thủy sản / Hải sản"],
            ["id_career" => 12, "name" => "Công nghệ thực phẩm / Dinh dưỡng"],
            ["id_career" => 12, "name" => "Thống kê"],
            ["id_career" => 12, "name" => "Nông nghiệp"],
            ["id_career" => 12, "name" => "Hàng hải"],
            ["id_career" => 12, "name" => "Công nghệ sinh học"],
            ["id_career" => 12, "name" => "Trắc địa / Địa Chất"],
            ["id_career" => 12, "name" => "Thủy lợi"],
            ["id_career" => 12, "name" => "Chăn nuôi / Thú y"],
            ["id_career" => 13, "name" => "Du lịch"],
            ["id_career" => 13, "name" => "Nhà hàng / Khách sạn"],
            ["id_career" => 13, "name" => "Hàng không"],
            ["id_career" => 14, "name" => "Thực phẩm & Đồ uống"],
            ["id_career" => 14, "name" => "Hàng gia dụng / Chăm sóc cá nhân"],
            ["id_career" => 15, "name" => "Mới tốt nghiệp / Thực tập"],
            ["id_career" => 15, "name" => "Ngành khác"],
        ]);
    }
}
