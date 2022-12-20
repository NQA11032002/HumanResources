<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use App\Models\User\Personally\article;


class HomeController extends Controller
{
    private $model;
    private $amountPage;

    public function __construct()
    {
        $this->model = new article();
        $this->amountPage = 6;
    }

    public function getHome()
    {
        $title = "Home Employer Hot";
        $worksHot = $this->model->getWorks($this->amountPage, "hot");

        return view("User.Personally.Pages.PostHotEmployer", compact("title", "worksHot"));
    }

    //Lấy danh sách tuyển dụng nổi bật
    public function getPostVipEmployer()
    {
        $title = "Home Employer Vip";
        $worksVip = $this->model->getWorks($this->amountPage, "vip");

        return view("User.Personally.Pages.PostVipEmployer", compact("title", "worksVip"));
    }

    //Lấy danh sách tuyển dụng mới nhất
    public function getPostNewEmployer()
    {
        $title = "Home Employer New";
        $worksNew = $this->model->getWorks($this->amountPage, "new");

        return view("User.Personally.Pages.PostNewEmployer", compact("title", "worksNew"));
    }
}