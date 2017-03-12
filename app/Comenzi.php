<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Comenzi extends Model
{
    public function getComenzi(){
        return DB::table("comenzi")->orderBy("id","desc")->where("sters",0)->get();
    }
    public function getAllComenzi(){
        return DB::table("comenzi")->orderBy("id","desc")->get();
    }
}
