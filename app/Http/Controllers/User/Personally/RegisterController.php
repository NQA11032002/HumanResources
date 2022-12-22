<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('User/Personally/Pages/Register');
    }

    public function confirmEmail()
    {
        return view('User/Personally/Pages/Confirm');
    }
}