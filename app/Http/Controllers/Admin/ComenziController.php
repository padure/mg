<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comenzi;
use Carbon\Carbon;
use DB;

class ComenziController extends Controller
{
    public function toatecomenzile(Comenzi $comenzi){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $post=$comenzi->getAllComenzi();
        return view("admin.toatecomenzile",["post"=>$post]);
    }
    public function comenzi(Comenzi $comenzi){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $post=$comenzi->getComenzi();
        return view("admin.comenzi",["post"=>$post]);
    }
    public function deleteprod(Request $request){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $id=$request->id;
        DB::table("comenzi")->where("id",$id)->update(["sters"=>1]);
    }
    public function comandaprodus(Request $request){
        $idprodus=$request->idprodus;
        $idcolor=$request->idcolor;
        $idmarime=$request->idmarime;
        $nume=$request->nume;
        $telefon=$request->telefon;
        $email=$request->email;
        $imageprodus=DB::table("products")->where("product_id",$idprodus)->value("image");
        $culoare=DB::table("colors")->where("color_id",$idcolor)->value("color");
        $marime=DB::table("marimi")->where("marimi_id",$idmarime)->first();
        DB::table("comenzi")->insert([
            "nume"=>$nume,
            "email"=>$email,
            "telefon"=>$telefon,
            "marime"=>$marime->marime,
            "produs"=>$imageprodus,
            "culoare"=>$culoare,
            "pret"=>$marime->price,
            "created_at"=>Carbon::now()
        ]);
    }
}
