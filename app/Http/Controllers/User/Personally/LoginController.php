<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use App\Http\Requests\connect;
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
    public function checkAccount(connect $request)
    {
        //lấy ra tất cả request
        $values = $request->safe()->collect();

        if (!empty($values["email"])) {
            $this->email = $values["email"];
        }

        if (!empty($values["password"])) {
            $this->password = $values["password"];
        }

        $result = $this->model->checkAccount($this->email, $this->password);

        if (!empty($result)) {
            return redirect()->route('home-post-hot')->with("logined", $result);
        } else {
            return redirect()->route('login.show')->with("login_error", "Tài khoản hoặc mật khẩu không đúng");
        }
    }
}