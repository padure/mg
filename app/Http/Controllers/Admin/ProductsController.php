<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductsController extends Controller
{
    public function products(){
        return view("admin.products");
    }
}
