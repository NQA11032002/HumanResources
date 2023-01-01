<?php

namespace App\Http\Controllers\User\Personally;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecoverPassword extends Controller
{

    public function index()
    {
        return view('User/Personally/Pages/RecoverPassword');
    }
}