<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class ObatekerController extends Controller
{
    // public function __construct(){
    //     // $this->middleware('coba');
    //     // $this->middleware('coba')->only('home');
    //     // $this->middleware('coba')->only('home','obat');
    //     $this->middleware('coba')->except('obat');
    // }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        return view('home');
    }
    public function login(){
        return view('login');
    }
    public function obat(){
        return view('obat');
    }
    public function order(){
        return view('order');
    }
}
