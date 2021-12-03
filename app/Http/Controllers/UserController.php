<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $req){
        $user = user::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return "Username or Password not match!!";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    public function logout(){
        if(session()->has('user')){
            session()->pull('user',null);
            return redirect('/');
        }   
    }
}
