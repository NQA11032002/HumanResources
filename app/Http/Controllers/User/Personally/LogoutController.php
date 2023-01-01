<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {

        session()->remove("logined");
        return redirect()->route('home-post-hot');
    }
}