<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Admin;

class AdminController extends Controller
{
    public function base(Admin $admin){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin/login");
        }
        return view("admin.home");
    }
    public function profil(Admin $admin){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin/login");
        }
        return view("admin.profil");
    }
    public function admins(Admin $admin){
        if (!filter_var(session("emailAdmin"), FILTER_VALIDATE_EMAIL)){
            return redirect("/admin/login");
        }
        $result=$admin->getAdmins();
        return view("admin.admins",["admins"=>$result]);
    }
    public function reset(Admin $admin){
        return view("admin.partials.reset");
    }
    public function getLogin(){
        $first=DB::table('admin')->where('confirmed',1)->count();
        if($first>0)
        {
            return view('admin.partials.login');
        }
        else{
            return redirect('/admin/register');
        }
    }
    public function getRegister(){
        $first=DB::table('admin')->where('confirmed',1)->count();
        if($first>0)
        {
            return redirect('/admin/login');
        }
        else{
            return view('admin.partials.register');
        }
    }
}
