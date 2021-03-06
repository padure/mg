<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Logo;
use DB;
use App\Publicitate;

class MainController extends Controller
{
    public function main(Products $products,Logo $logo,Publicitate $public){
        $produse=$products->getAllProducts();
        $meniu=$logo->getInfo();
        $descriereavideo=DB::table("descriereavideo")->get();
        $descriereaprod=DB::table("descrierea")->get();
        $publicitate=$public->getPublicitate();
        return view("main.base",["products"=>$produse,
                                "meniu"=>$meniu,
                                "descriereavideo"=>$descriereavideo,
                                "descriereaprod"=>$descriereaprod,
                                "publicitate"=>$publicitate
                               ]); 
    }
    public function livrare(Logo $logo){
        $meniu=$logo->getInfo();
        $despre=DB::table("despreliv")->first();
        $lista=DB::table("livrarelista")->get();
        return view("main.livrare",["meniu"=>$meniu,
                                    "despre"=>$despre,
                                    "lista"=>$lista
                                    ]);
    }
}


