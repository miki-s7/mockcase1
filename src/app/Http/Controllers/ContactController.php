<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class ContactController extends Controller
{
    public function newUser(Request $request){
        //dd('profile');
        $user = $request->only(['name', 'email', 'password']);
        //dd($user);
        User::login($user);
        return redirect('/mypage/profile');
    }

    public function newProfile(Request $request){
        //dd('profile');
        $profile = $request->all();
        //dd($user);
        Profile::create($profile);
        return redirect('/');
    }

    public function loginUser(Request $request){
        //dd('profile');
        $credentials = $request->only(['email', 'password']);
        return redirect('/');
    }
//会員登録
    public function profile(){
        return view('auth.profile');
    }
//ログイン
    public function index(){
        return view('index');
    }

}
