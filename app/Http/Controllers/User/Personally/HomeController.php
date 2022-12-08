<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $title = "Home";


    public function getHome(){
        return view("User.Personally.Pages.Home");
    }

    public function getPostHotEmployer(){
        return view("User.Personally.Pages.PostHotEmployer");
    }

    public function getPostVipEmployer(){
        return view("User.Personally.Pages.PostVipEmployer");
    }
}
