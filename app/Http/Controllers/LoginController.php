<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function view(){
        return view('login');
    }

    public function authenticate(Request $request)
{   
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|string'
    ]);
    $credentials = $request->only('email', 'password');
 
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
 
        return redirect()->intended('home');
    }
 
    return back()->with([
        'loginError' => 'email atau Password salah',
    ]);
}

public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('login');
}


    // public function login()
    // {
    //     if (Auth::check()) {
    //         return redirect('home');
    //     }else{
    //         return view('login');
    //     }
    // }

    // public function actionlogin(Request $request)
    // {
    //     $data = [
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password'),
    //     ];

    //     if (Auth::Attempt($data)) {
    //         return redirect('home');
    //     }else{
    //         Session::flash('error', 'Email atau Password Salah');
    //         return redirect('/');
    //     }
    // }

    // public function actionlogout()
    // {
    //     Auth::logout();
    //     return redirect('/');
    // }
}
