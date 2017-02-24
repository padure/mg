<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use File;

class ProductsController extends Controller
{
    public function products(){
        return view("admin.products");
    }
    public function save(Request $request){
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
