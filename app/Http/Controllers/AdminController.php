<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;


class AdminController extends Controller
{
    //    public function __construct()
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getName(){
        $user = Auth::guard('admin')->user();
        return view('/admin', ['user'=>$user]);
    }

    public function addItem(){
        
    }
}
