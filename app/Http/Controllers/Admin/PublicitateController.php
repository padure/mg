<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PublicitateController extends Controller
{
    public function publicitate(){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        return view("admin.publicitate");
    }
}
