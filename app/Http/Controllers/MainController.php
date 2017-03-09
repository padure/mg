<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Logo;
use DB;

class MainController extends Controller
{
    public function main(Products $products,Logo $logo){
        $produse=$products->getAllProducts();
        $meniu=$logo->getInfo();
        $descriereavideo=DB::table("descriereavideo")->get();
        $descriereaprod=DB::table("descrierea")->get();
        return view("main.base",["products"=>$produse,
                                "meniu"=>$meniu,
                                "descriereavideo"=>$descriereavideo,
                                "descriereaprod"=>$descriereaprod,
                               ]); 
    }
    public function livrare(){
        return view("main.livrare");
    }
}
