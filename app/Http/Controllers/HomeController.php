<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function createevent()
    {
        return view('CreateEvent');
    }

    public function page()
    {
        return view('page');
    }

    public function map(){
        return view('map');
    }
    public function stick(){
        return view('sticky');
    }
}
