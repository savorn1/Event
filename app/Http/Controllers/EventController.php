<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function user(){
         return view('index');
    }
    public function password(){
        return view('changepassword');
    }

}
