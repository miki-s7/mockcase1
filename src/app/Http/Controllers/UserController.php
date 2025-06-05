<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    public function newUser(Request $request){
        //dd('profile');
        //$user = $request->only(['name', 'email', 'password']);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
            ]);
        //User::login($user);
        return redirect('/mypage/profile');
    }

    public function profile(){
        return view('auth.profile');
    }

    public function newProfile(Request $request){
        //dd('profile');
        $profile = $request->all();
        //dd($user);
        //Profile::create($profile);
        return redirect('/');
    }

    public function loginUser(Request $request){
        //dd('profile');
        $credentials = $request->only(['email', 'password']);
        return redirect('/');
    }
    
//ログイン
    public function index(){
        return view('index');
    }

}
