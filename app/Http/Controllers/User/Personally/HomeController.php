<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\homeModel;

class HomeController extends Controller
{
    public function getHome(){
        $title = "Home Employer Hot";
        $worksNew = $this->getWorks("hot");
        return view("User.Personally.Pages.PostHotEmployer", compact("title","worksNew"));
    }

    public function getPostVipEmployer(){
        $title = "Home Employer Vip";

        $worksVip = $this->getWorks("vip");
        return view("User.Personally.Pages.PostVipEmployer", compact("title","worksVip"));
    }
    public function getPostNewEmployer()
    {
        $title = "Home Employer New";

        $worksNew = $this->getWorks("new");
        return view("User.Personally.Pages.PostNewEmployer", compact("title","worksNew"));
    }

    function getWorks($typeWork)
    {
        $result = '';

        if($typeWork == "vip")
        {
            $result = homeModel::join('infor_company as cp', 'article_company.id_company', '=', 'cp.id')
                      ->where("article_company.salary_from", '>=', 20000000)
                      ->where("article_company.status", 1)->paginate(6);
        }
        else if($typeWork == "new")
        {
            $result = homeModel::join('infor_company as cp', 'article_company.id_company', '=', 'cp.id')
            ->orderBy('article_company.date_at', 'DESC')->paginate(6);

        }

        return $result;
    }
}