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
        $typeWorks = $this->model->getTypeWork();
        $careers = $this->model->getCareer();
        $cities = $this->getCities();

        return view("User.Personally.Pages.Posts", compact('typeWorks', 'careers', 'cities'));
    }

    public function createPost(Request $request)
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
        $interests = $this->changeInterestsToArray(2);

        $htmlPost = "";

        foreach ($posts as $post)
        {
            $htmlPost .= '<a href="" class="nav-item d-flex nav-item__post position-relative posts-item">
                <div href="" class="nav-item__image post-item--image">
                    <img src='. "{{ asset($post->logo) }}".' alt="">
                </div>

                <div class="nav-item__content d-flex justify-content-between position-relative">
                    <div class="nav-item__content--left">
                        <p href="#" class="h4">'.$post->title.'</p>
                        <p href="#" class="h6">'.$post->name.'</p>
                        <p class="salary"><i class="fa-solid fa-dollar-sign"></i> Lương: <span
                                class="salary-content">'.number_format($post->salary_from, 0, ',', '.').' đ
                                - '.number_format($post->salary_to, 0, ',', '.').' đ</span> </p>
                        <p class="address"><i class="fa-solid fa-location-dot"></i>
                            '.$post->address_work.'
                        </p>
                        <p class="date-at"><i class="fa-solid fa-clock"></i> Đăng ngày
                            '.date('m-d-Y', strtotime($post->created_at)).' . Cập nhật ngày '.date('m-d-Y', strtotime($post->updated_at)).'
                        </p>
                    </div>
                </div>';

                if (in_array($post->id, $interests))
                {
                    $htmlPost .= '<i class="fa-solid fa-bookmark icon-interested icon-interested--save post-item--save top-0" data-id='. $post->id .'></i>';
                }
                else
                {
                    $htmlPost .= '<i class="fa-solid fa-bookmark icon-interested icon-interested--unsave post-item--save top-0" data-id='. $post->id .'></i>';
                }

                $htmlPost .= '</a>';
        }
        $htmlPost .= $posts->links();

        echo $htmlPost;
    }

    public function getPaginationPost()
    {
        $posts = $this->model->getWorks($this->amountPage, null);

        return response()->json($posts);
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
