<?php

namespace App\Http\Controllers\main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    //
    public function main(){
        return view('main.home');
    }
}
