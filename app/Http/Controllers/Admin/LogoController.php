<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Logo;
use Carbon\Carbon;
use File;

class LogoController extends Controller
{
    public function logo(Logo $logo){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $post=$logo->getInfo();
        return view('admin.logo',['post'=>$post]);
    }
    public function addoredelucru(Request $request){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        DB::table("logo")->where("variable","ore")->delete();
        DB::table("logo")->insert(["variable"=>"ore","valuevariable"=>$request->ora1]);
        DB::table("logo")->insert(["variable"=>"ore","valuevariable"=>$request->ora2]);
        DB::table("logo")->insert(["variable"=>"ore","valuevariable"=>$request->ora3]);
    }
    public function addtelefon(Request $request){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $tel = DB::table("logo")->where("variable","telefon")->first();
        if(is_null($tel)){
            DB::table("logo")->insert(["variable"=>"telefon","valuevariable"=>$request->telefon]);
        }else{
            DB::table("logo")->where("variable","telefon")->update(["valuevariable"=>$request->telefon]);
        }
    }
    public function uploadlogo(Request $request){
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
                    $path="allimages/logo/";
                    if($files->move($path,$name.".".$ext)){
                        $filename=$path.$name.".".$ext;
                        $response=["succes"=>true,
                                   "image"=>$filename];
                        $logo = DB::table("logo")->where("variable","logo")->first();
                        if(is_null($logo)){
                            DB::table("logo")->insert(["variable"=>"logo","valuevariable"=>$filename]);
                        }else{
                            if(File::exists($logo->valuevariable)){
                                File::delete($logo->valuevariable);
                            }
                            DB::table("logo")->where("variable","logo")->update(["valuevariable"=>$filename]);
                        }
                    }
                }
            }
            return response()->json($response);
        }else{
            return response()->json(array('succes'=>"notfound"));
        }
    }
}
