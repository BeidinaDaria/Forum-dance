<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerPage(){
        return view('auth.register');
    }
    public function storeUser(Request $request){
        $request->validate([
            'name'=>'required|min:2',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'password_confirmation'=>'same:password',
        ]);
        User::create([
            'name'=>$request->input('name'),
            'email'=>$request->email,
            'password'=>Hash::make($request->pass),
        ]);
        return redirect()->route('auth.login-page')->with("success","Your registration was successful!");
    }
    public function loginPage(){
        return view('auth.login');
    }
    public function login(Request $request){
        $confidential=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(Auth::attempt($confidential)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email'=>'Uncorrect input',
        ])->onlyInput('email');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->reqenerateToken();
        return redirect('/');
    }
}
