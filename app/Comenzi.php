<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Comenzi extends Model
{
    public function getComenzi(){
        return DB::table("comenzi")->orderBy("id","desc")->get();
    }
}
