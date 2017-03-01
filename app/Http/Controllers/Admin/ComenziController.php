<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comenzi;
use DB;

class ComenziController extends Controller
{
    public function comenzi(){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        return view("admin.comenzi");
    }
}
