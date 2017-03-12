<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class ContactusController extends Controller
{
    public function contactus(){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin/login");
        }
        $return=DB::table("contactus")->orderBy("id","desc")->get();
        return view("admin.contactus",["post"=>$return]);
    }
    public function telefoneaza(Request $request){
        DB::table("contactus")->insert([
            "nume"=>$request->nume,
            "telefon"=>$request->telefon,
            "created_at"=>Carbon::now(3)
        ]);
    }
    public function deletetelefon(Request $request){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin/login");
        }
        DB::table("contactus")->where("id",$request->id)->delete();
    }
}
