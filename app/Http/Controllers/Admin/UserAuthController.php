<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin\UserAuth;

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

    public function create(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'table' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);
        $user = new UserAuth;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $query = $user->save();

        if($query) {
            return back()->with('success', 'You have benn successfully registered');
        } else {
            return back()->with('fail', 'Something was wrong');
        }
    }

}
