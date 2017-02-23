<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Logo;

class LogoController extends Controller
{
    public function logo(){
        
        return view("admin.logo");
    }
}
