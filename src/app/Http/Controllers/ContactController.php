<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller
{
    public function register(){
        return view('register');
    }

    public function profile(Request $request){
        //dd('profile');
        $user = $request->only(['name', 'email', 'password']);
        //dd($user);
        User::create($user);
        return view('profile');
    }

    public function login(){
        return view('login');
    }
    

}
