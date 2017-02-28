<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use File;
use App\Products;

class ProductsController extends Controller
{
    public function products(Products $products){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $result=$products->getProductsForAdmin();
        return view("admin.products",["post"=>$result]);
    }
    public function newproduct(){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        return view("admin.newproduct");
    }
    public function modproduct($id){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $result=DB::table("products")
                            ->select("products.*","colors.color_id","colors.color","colors.image_color","marimi.marimi_id","marimi.marime")
                            ->leftJoin("colors",function($join){
                                $join->on('colors.product_id', '=', 'products.product_id');
                            })
                            ->leftJoin("marimi",function($join){
                                $join->on('marimi.product_id', '=', 'products.product_id');
                            })
                            ->where("products.product_id",$id)
                            ->get();
        $arr=[];
        foreach($result as $key=>$i){
            $arr["product"]=$i;
            $arr["colors"][$i->color_id]=$i;
            $arr["marimi"][$i->marimi_id]=$i;
        }
        return view("admin.modproduct",["post"=>$arr]);
    }
    public function save(Request $request,  Products $products){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $imagine=$request->imagine;
        $price=$request->price;
        $description=$request->description;
        $marimi=$request->marimi;
        $colors=$request->colors;
        $imagecolors=$request->imagecolors;
        $id=DB::table("products")->insertGetId(["image"=>$imagine,"price"=>$price,"description"=>$description]);
        $allcolors=[];
        for($i=0;$i< count($colors);$i++){
            $allcolors[]=["product_id"=>$id,"color"=>$colors[$i],"image_color"=>$imagecolors[$i]];
        }
        DB::table("colors")->insert($allcolors);
        $allmarims=[];
        for($i=0;$i< count($marimi);$i++){
            $allmarims[]=["product_id"=>$id,"marime"=>$marimi[$i]];
        }
        DB::table("marimi")->insert($allmarims);
    }
    public function updateprodus(Request $request,  Products $products){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        } 
        $imagine=$request->imagine;
        $price=$request->price;
        $description=$request->description;
        $marimi=$request->marimi;
        $colors=$request->colors;
        $imagecolors=$request->imagecolors;
        $produs_id=$request->idproduct;
        DB::table("colors")->where("product_id",$produs_id)->delete();
        DB::table("marimi")->where("product_id",$produs_id)->delete();
        DB::table("products")->where("product_id",$produs_id)->update(["image"=>$imagine,"price"=>$price,"description"=>$description]);
        $allcolors=[];
        for($i=0;$i< count($colors);$i++){
            $allcolors[]=["product_id"=>$produs_id,"color"=>$colors[$i],"image_color"=>$imagecolors[$i]];
        }
        DB::table("colors")->insert($allcolors);
        $allmarims=[];
        for($i=0;$i< count($marimi);$i++){
            $allmarims[]=["product_id"=>$produs_id,"marime"=>$marimi[$i]];
        }
        DB::table("marimi")->insert($allmarims);
    }
    public function delprodus(Request $request ,Products $products){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $id=$request->id;
        $products->deleteProdus($id);
    }
    public function defaultupload(Request $request){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $response=[];
        $files=$request->file("file");
        $extensii=["jpeg","jpg","png","svg"];
        if ($request->hasFile('file')) {
            if($files->isValid()){
                $ext=strtolower($files->getClientOriginalExtension());
                if(in_array($ext, $extensii)){
                    $date=Carbon::now();
                    $name=$date->format("ymdhis");
                    $path="allimages/products/default/";
                    if($files->move($path,$name.".".$ext)){
                        $filename=$path.$name.".".$ext;
                        DB::table("urna")->insert(["urna"=>$filename]);
                        DB::table("urna")->where("urna",$request->image)->delete();
                        if(File::exists($request->image)){
                            File::delete($request->image);
                        }
                        $response=["succes"=>true,
                                   "image"=>$filename];
                    }
                }
            }
            return response()->json($response);
        }else{
            return response()->json(array('succes'=>"notfound"));
        }
    }
    public function uploadcolor(Request $request){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $response=[];
        $files=$request->file("file");
        $extensii=["jpeg","jpg","png","svg"];
        if ($request->hasFile('file')) {
            if($files->isValid()){
                $ext=strtolower($files->getClientOriginalExtension());
                if(in_array($ext, $extensii)){
                    $date=Carbon::now();
                    $name=$date->format("ymdhis");
                    $path="allimages/products/colors/";
                    if($files->move($path,$name.".".$ext)){
                        $filename=$path.$name.".".$ext;
                        DB::table("urna")->insert(["urna"=>$filename]);
                        $response=["succes"=>true,
                                   "image"=>$filename];
                    }
                }
            }
            return response()->json($response);
        }else{
            return response()->json(array('succes'=>"notfound"));
        }
    }
    public function uploadimage(Request $request){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $response=[];
        $files=$request->file("file");
        $extensii=["jpeg","jpg","png","svg"];
        if ($request->hasFile('file')) {
            if($files->isValid()){
                $ext=strtolower($files->getClientOriginalExtension());
                if(in_array($ext, $extensii)){
                    $date=Carbon::now();
                    $name=$date->format("ymdhis");
                    $path="allimages/products/images/";
                    if($files->move($path,$name.".".$ext)){
                        $filename=$path.$name.".".$ext;
                        DB::table("urna")->insert(["urna"=>$filename]);
                        $response=["succes"=>true,
                                   "image"=>$filename];
                    }
                }
            }
            return response()->json($response);
        }else{
            return response()->json(array('succes'=>"notfound"));
        }
    }
}
