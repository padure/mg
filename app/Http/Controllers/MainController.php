<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class MainController extends Controller
{
    public function main(Products $products){
        $produse=$products->getAllProducts();
        return view("main.base",["products"=>$produse]);
    }
}
