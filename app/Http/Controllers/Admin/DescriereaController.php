<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DescriereaController extends Controller
{
    public function descrierea(){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin/login");
        }
        $descrierea=DB::table("descrierea")->get();
        return view("admin.descrierea",["post"=>$descrierea]);
    }
    public function savedescrierea(Request $request){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin/login");
        }
        $descrierea=$request->descrierea;
        $all=[];
        for($i=0;$i< count($descrierea);$i++){
            $all[]=["descrierea"=>$descrierea[$i]];
        }
        DB::table("descrierea")->delete();
        DB::table("descrierea")->insert($all);
    }
}
