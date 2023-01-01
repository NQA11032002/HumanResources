<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use App\Http\Requests\registerRequest;
use App\Models\Account\account;
use Illuminate\Http\Request;
use App\Mail\notifyMail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    private $model;
    private $email;
    private $password;
    private $firstName;
    private $lastName;
    private $image;

    function __construct()
    {
        $this->model = new account();
        $this->image = "images/avatar/default.png";
    }

    public function index()
    {
        return view('User/Personally/Pages/Register');
    }

    public function postRegister(registerRequest $request)
    {
        if (!empty($request->firstName)) {
            $this->firstName = $request->firstName;
        }

        if (!empty($request->lastName)) {
            $this->lastName = $request->lastName;
        }

        if (!empty($request->email)) {
            $this->email = $request->email;
        }

        if (!empty($request->password)) {
            $this->password = $request->password;
        }

        $account = $this->model->checkEmail($this->email);
        $code = $this->createCode();

        if (empty($account)) {
            $id_newAccount = $this->model->registerAccount(2, $this->email, $this->password, 0);
            $this->model->registerInfor($id_newAccount, $this->firstName, $this->lastName, $this->image);

            if (!empty($id_newAccount)) {
                $this->sendMail($this->email, $code);
                return redirect()->route('register.confirm')->with('email', $this->email)->with('code', $code);
            }
        } else {
            if ($account->status === 0) {
                $this->sendMail($this->email, $code);
                return redirect()->route('register.confirm')->with('email', $this->email)->with('code', $code);
            } else {
                return redirect()->route('register.show')->with('email', 'Email của bạn đã được đăng ký');
            }
        }
    }

    public function confirmEmail()
    {
        return view('User/Personally/Pages/Confirm');
    }

    public function activeAccount(Request $request)
    {
        $myCode = "";

        if (!empty($request->email)) {
            $email = $request->email;
        }

        if (!empty($request->myCode1) && !empty($request->myCode2) && !empty($request->myCode3) && !empty($request->myCode4)) {
            $myCode .= $request->myCode1 . $request->myCode2 . $request->myCode3 . $request->myCode4;
        }

        if (!empty($request->code)) {
            $code = $request->code;
        }

        if (strcmp($myCode, $code) == 0) {
            $this->model->activeAccount($email, 1);
            return redirect()->route('login.show')->with('code', $code);
        } else {
            return redirect()->route('register.confirm')->with('code_error', 'Mã xác minh của bạn không đúng');
        }
    }

    public function createCode()
    {
        $code = "";

        for ($i = 0; $i < 4; $i++) {
            $code .= random_int(1, 9);
        }

        return $code;
    }

    public function sendMail($email, $code)
    {
        $temp = explode('@', $email);

        Mail::to($email)->send(new notifyMail($code));
    }
}