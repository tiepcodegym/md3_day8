<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view("backend.auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->only("email","password");
        if (Auth::attempt($data)) {
            toastr()->success("xin chao" . Auth::user()->name);
            return redirect()->route("posts.index");
        }else{
            toastr()->error("sai mat khau");
            return redirect()->route("login.showFormLogin");
        }

    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route("login.showFormLogin");
    }

    public function showFormRegister()
    {
        return view("backend.auth.register");
    }

    public function register(Request $request)
    {
        $data = $request->only('name','email','password');
        $data["password"] = Hash::make($request->password);
        User::query()->create($data);
        return redirect()->route("login.showFormLogin");
    }
}
