<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function mainPage(){
        return view("main");
    }
    public function changeLocale(Request $request,$lang){
        $request->session()->put('lang',$request->lang);
        return back();
    }
}
