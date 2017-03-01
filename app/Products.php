<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Products extends Model
{
    public function getAllProducts(){
        $return=DB::table("products")
                    ->select("products.*","colors.*","marimi.*")
                    ->leftJoin("colors",function($join){
                        $join->on('colors.product_id', '=', 'products.product_id');
                    })
                    ->leftJoin("marimi",function($join){
                        $join->on('marimi.product_id', '=', 'products.product_id');
                    })
                    ->orderBy("products.product_id")
                    ->get();
        $arr=[];
        foreach($return as $key=>$i){
            $arr[$i->product_id]["product"] = $i;
            $arr[$i->product_id]["colors"][$i->color_id]= $i;
            $arr[$i->product_id]["marimi"][$i->marimi_id]= $i; 
        }
        return $arr;
    }
    public function getProductsForAdmin(){
        $return=DB::table("products")
                    ->select("products.*",\DB::raw("count(colors.color_id) as countcolors"))
                    ->leftJoin("colors",function($join){
                        $join->on('colors.product_id', '=', 'products.product_id');
                    })
                    ->groupBy("products.product_id")
                    ->get();
        $arr=[];
        foreach($return as $key=>$i){
            $arr[$i->product_id]["product"]= $i;
            $arr[$i->product_id]["countmarimi"]= DB::table("marimi")->where("product_id",$i->product_id)->count();
        }
        return $arr;
    }
    public function deleteProdus($id){
        DB::table("products")->where("product_id",$id)->delete();
        DB::table("colors")->where("product_id",$id)->delete();
        DB::table("marimi")->where("product_id",$id)->delete();
    }
}
