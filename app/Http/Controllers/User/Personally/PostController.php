<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use App\Models\User\Personally\address;
use App\Models\User\Personally\article;
use App\Models\User\Personally\interested;
use App\Models\User\Personally\career;

use Symfony\Component\HttpFoundation\Request;


class PostController extends Controller
{
    private $model;
    private $amountPage;
    private $page;

    public function __construct()
    {
        $this->model = new article();
        $this->amountPage = 10;
        $this->page = 0;
    }

    public function getPosts(Request $request)
    {
        $typeWorks = $this->model->getTypeWork();
        $careers = $this->model->getCareer();
        $cities = $this->getCities();
        $fieldCareers = $this->getFieldCareer();

        return view("User.Personally.Pages.Posts", compact('typeWorks', 'careers', 'fieldCareers' ,'cities'));
    }

    public function createPost(Request $request)
    {
        $keywords = "";
        $address = "";
        $sort_date = 0;
        $sort_salary = 0;
        $typeworks = null;
        $experiences_from = null;
        $experiences_to = null;
        $categories = null;
        $field_career = null;

        if(!empty($request->search_keywords))
        {
            $keywords = $request->search_keywords;
        }

        if(!empty($request->page))
        {
            $this->page = $request->page;
        }

        if(!empty($request->search_address))
        {
            $address = $request->search_address;
        }

        if (!empty($request->sort_date))
        {
            $sort_date = $request->sort_date;
        }

        if (!empty($request->sort_salary))
        {
            $sort_salary = $request->sort_salary;
        }

        if (!empty($request->typework))
        {
            $typeworks = $request->typework;
        }

        if (!empty($request->experiences_from) && !empty($request->experiences_to))
        {
            $experiences_from = $request->experiences_from;
            $experiences_to = $request->experiences_to;
        }

        if (!empty($request->categories))
        {
            $categories = $request->categories;
        }

        if (!empty($request->field_career))
        {
            $field_career = $request->field_career;
        }

        $posts = $this->model->getPosts($this->amountPage, $this->page, $keywords, $address, $sort_date, $sort_salary, $typeworks, $experiences_from, $experiences_to, $categories, $field_career);
        $pagination = $this->model->getPaginationPost($this->amountPage, $keywords, $address, $sort_date, $sort_salary, $typeworks, $experiences_from, $experiences_to, $categories, $field_career);

        $this->model = new interested();
        $interested = $this->model->getInterests(2);

        return response()->json([$posts,$interested, $pagination]);
    }

    //Lấy danh sách các ngành nghề theo lĩnh vực
    public function getFieldCareer()
    {
        $this->model = new career();

        $fieldCareers = $this->model->getFieldCareer();

        return $fieldCareers;
    }


    //Lấy danh sách thành phố
    public function getCities()
    {
        $this->model = new address();

        $cities = $this->model->getCity();

        return $cities;
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