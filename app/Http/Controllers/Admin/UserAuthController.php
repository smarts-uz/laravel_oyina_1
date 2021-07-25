<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserAuthController extends Controller
{
    public function login()
    {
        return view("site.login.login");
    }

    public function register()
    {
        return view("site.login.register");
    }
}
