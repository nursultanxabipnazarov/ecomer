<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function dash(){
       $userType =  Auth::user()->user_type;

        if($userType==1){
            return view('admin.home');
        }else{
            return view('home.index');
        }
    }
}
