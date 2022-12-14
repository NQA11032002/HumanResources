<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use App\Models\User\Personally\address;
use App\Models\User\Personally\article;
use App\Models\User\Personally\career;
use App\Models\User\Personally\interested;
use Symfony\Component\HttpFoundation\Request;

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
        $interests = $this->changeInterestsToArray(2);
        $cities = $this->getCity();
        $careers = $this->getCareer();
        $levels = $this->getLevel();

        return view("User.Personally.Pages.PostHotEmployer", compact("title", "worksHot", "interests", "cities", "careers", "levels"));
    }

    //Lấy danh sách tuyển dụng nổi bật
    public function getPostVipEmployer()
    {
        $title = "Home Employer Vip";
        $worksVip = $this->model->getWorks($this->amountPage, "vip");
        $interests = $this->changeInterestsToArray(2);
        $cities = $this->getCity();
        $careers = $this->getCareer();
        $levels = $this->getLevel();

        return view("User.Personally.Pages.PostVipEmployer", compact("title", "worksVip", "interests", "cities", "careers", "levels"));
    }

    //Lấy danh sách tuyển dụng mới nhất
    public function getPostNewEmployer()
    {
        $title = "Home Employer New";
        $worksNew = $this->model->getWorks($this->amountPage, "new");
        $interests = $this->changeInterestsToArray(2);
        $cities = $this->getCity();
        $careers = $this->getCareer();
        $levels = $this->getLevel();

        return view("User.Personally.Pages.PostNewEmployer", compact("title", "worksNew", "interests", "cities", "careers", "levels"));
    }

    //lấy danh sách thành phố
    public function getCity()
    {
        $this->model = new address();
        $cities = $this->model->getCity();

        return $cities;
    }

    //Lấy danh sách ngành nghề
    public function getCareer()
    {
        $this->model = new career();
        $careers = $this->model->getFieldCareer();

        return $careers;
    }

    //Lấy danh sách ngành nghề
    public function getLevel()
    {
        $this->model = new career();
        $levels = $this->model->getLevel();

        return $levels;
    }

    //Chuyển danh sách tuyển dụng sang kiểu mảng
    public function changeInterestsToArray($id_account)
    {
        $this->model = new interested();

        $checkInterested = $this->model->getInterests($id_account);

        $arrInterested = array();

        foreach ($checkInterested as $item) {
            array_push($arrInterested, $item->id_article);
        }

        return $arrInterested;
    }

    //Lưu bài tuyển dụng quan tâm
    public function postSaved(Request $request)
    {
        if (!empty($request->id)) {
            $id_Article = $request->id;
        }

        $this->model = new interested();
        $this->model->postSaved(2, $id_Article);
    }

    //Hủy lưu bài tuyển dụng quan tâm
    public function postUnsaved(Request $request)
    {
        if (!empty($request->id)) {
            $id_Article = $request->id;
        }

        $this->model = new interested();
        $this->model->postUnsaved(2, $id_Article);
    }
}