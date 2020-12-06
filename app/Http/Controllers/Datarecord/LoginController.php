<?php

namespace App\Http\Controllers\Datarecord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function showlogin()
    {
        return view('datarecord.login.login');
    }
}
