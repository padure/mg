<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Publicitate extends Model
{
    public function getPublicitate(){
        $return=[];
        $return["livrare"]=DB::table("livrare")->first();
        $return["intoarcere"]=DB::table("intoarcere")->first();
        $return["garantia"]=DB::table("garantia")->first();
        $return["indoieli"]=DB::table("indoieli")->first();
        $return["descrierepub"]=DB::table("descrierepub")->first();
        return $return;
    }
}
