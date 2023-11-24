<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function redirectPath()
    {
        $path = \Session::pull('url.intended');
        return $path;
    }
}
