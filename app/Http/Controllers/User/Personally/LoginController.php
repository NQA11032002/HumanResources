<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\Models\Account\account;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $model;
    private $email;
    private $password;

    public function __construct()
    {
        $this->model = new account();
    }

    public function index()
    {
        return view('User/Personally/Pages/Login');
    }

    //kiểm tra tài khoản tồn tại
    public function checkAccount(loginRequest $request)
    {
        $model = new account();

        if (!empty($request["email"])) {
            $email = $request["email"];
        }

        if (!empty($request["password"])) {
            $password = $request["password"];
        }

        $result = $model->checkAccount($email, $password);

        if (!empty($result)) {
            session()->put("logined", $result);
            return redirect()->route('home-post-hot');
        } else {
            return redirect()->route('login.show')->with("login_error", "Tài khoản hoặc mật khẩu không đúng");
        }
    }
}