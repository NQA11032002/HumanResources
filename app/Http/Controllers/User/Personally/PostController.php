<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use App\Models\User\Personally\address;
use App\Models\User\Personally\article;
use App\Models\User\Personally\interested;
use Symfony\Component\HttpFoundation\Request;


class PostController extends Controller
{
    private $model;
    private $amountPage;

    public function __construct()
    {
        $this->model = new article();
        $this->amountPage = 10;
    }

    public function getPosts(Request $request)
    {
        $keywords = "";
        $address = "";

        if(!empty($request->search_keywords))
        {
            $keywords = $request->search_keywords;
        }

        if(!empty($request->search_address))
        {
            $address = $request->search_address;
        }

        $posts = $this->model->getWorks($this->amountPage, null,$keywords, $address);
        $typeWorks = $this->model->getTypeWork();
        $careers = $this->model->getCareer();
        $interests = $this->changeInterestsToArray(2);
        $cities = $this->getCities();

        return view("User.Personally.Pages.Posts", compact('typeWorks', 'careers', 'interests', 'posts', 'cities'));
    }

    public function getCities()
    {
        $this->model = new address();

        $cities = $this->model->getCity();

        return $cities;
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
}
