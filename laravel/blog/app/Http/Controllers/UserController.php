<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function createUser(UserRequest $req){
       // dd($req->validated());
       User::create($req->validated());
       return to_route("home");
    }
    public function userForm(){
        return view("userForm");
    }

    public function loginForm(){
       
        return view("loginForm");
    }

    public function logout(){
       Auth::logout();
        return to_route("login");
    }

    public function login(LoginRequest $req){
        $validated=$req->validated();
        if(Auth::attempt($validated)) {
            $req->session()->regenerate();
            return redirect()->intended(route("home"));
        }
        return to_route("login")->withErrors([
            "error"=>"Données Invalides"
        ]);
    }

}
