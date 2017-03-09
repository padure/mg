<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PublicitateController extends Controller
{
    public function publicitate(){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        return view("admin.publicitate");
    }
    public function savepublicitate(Request $request){
       if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin");
        }
        $ltitlu=$request->ltitlu;
        $ltitludescriere=$request->ltitludescriere;
        $ldescriere=$request->ldescriere;
        DB::table("livrare")->delete();
        DB::table("livrare")->insert(["titlu"=>$ltitlu,
                                      "titludescriere"=>$ltitludescriere,
                                      "descriere"=>$ldescriere]);
        $ititlu=$request->ititlu;
        $idescriere=$request->idescriere;
        DB::table("intoarcere")->delete();
        DB::table("intoarcere")->insert(["titlu"=>$ititlu,
                                        "descriere"=>$idescriere]);
        $gtitlu=$request->gtitlu;
        $gdescriere=$request->gdescriere;
        DB::table("garantia")->delete();
        DB::table("garantia")->insert(["titlu"=>$gtitlu,
                                       "descriere"=>$gdescriere]);
        $intitlu=$request->intitlu;
        $indescriere=$request->indescriere;
        DB::table("indoieli")->delete();
        DB::table("indoieli")->insert(["titlu"=>$intitlu,
                                       "descriere"=>$indescriere]);
        $ddescriere=$request->ddescriere;
        DB::table("descrierepub")->delete();
        DB::table("descrierepub")->insert(["descriere"=>$ddescriere]);
        $livtitlu=$request->livtitlu;
        $livdescriere=$request->livdescriere;
        DB::table("livrare")->delete();
        DB::table("livrare")->insert(["titlu"=>$livtitlu,
                                      "descriere"=>$livdescriere]);
    }
}
