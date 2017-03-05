<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Logo extends Model
{
    public function getInfo(){
        $logo=DB::table('logo')->where("variable","logo")->first();
        $ore=DB::table('logo')->where("variable","ore")->get();
        $nrtel=DB::table('logo')->where("variable","telefon")->first();
        $social=DB::table('social')->get();
        $descrierea=DB::table('logo')->where("variable","descrierea")->first();
        $descriereaformei=DB::table('logo')->where("variable","descriereaformei")->first();
        $video=DB::table('logo')->where("variable","video")->first();
        return ["logo"=>$logo,"ore"=>$ore,"nrtel"=>$nrtel,"social"=>$social,"descrierea"=>$descrierea,"video"=>$video,"descriereaformei"=>$descriereaformei];
    }
}
