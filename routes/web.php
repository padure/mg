<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
/*Rutele Main*/
    Route::get('/','MainController@main');


/*Admin rutes*/
    Route::get('/admin','Admin\AdminController@base');
    Route::get('/admin/login','Admin\AdminController@getLogin');
    Route::post('/admin/login','Admin\RegisterController@login');
    Route::get('/admin/register','Admin\AdminController@getRegister');
    Route::post('/admin/register','Admin\RegisterController@register');
    Route::post('/admin/registerother','Admin\RegisterController@registerother');
    Route::get('/admin/confirm/{email}-{token}','Admin\RegisterController@comfirm');
    Route::get('/exitadmin','Admin\RegisterController@exitadmin');
    Route::get('/admin/users','Admin\AdminController@admins');
    Route::post('/admin/deleteadmin','Admin\SettingController@deleteadmin');
    Route::get('/admin/reset','Admin\AdminController@reset');
    Route::post('/admin/reset','Admin\RegisterController@sendemail');
    Route::post('/admin/setcode','Admin\RegisterController@setcode');
    Route::post('/admin/newpass','Admin\RegisterController@newpass');
/*Meniu*/
    Route::get('/admin/logo','Admin\LogoController@logo');
    Route::post('/admin/uploadlogo','Admin\LogoController@uploadlogo');
    Route::post('/admin/addoredelucru','Admin\LogoController@addoredelucru');
    Route::post('/admin/addtelefon','Admin\LogoController@addtelefon');
    Route::post('/admin/addsocial','Admin\LogoController@addsocial');
    
/*Products*/
    Route::get('/admin/products','Admin\ProductsController@products');
    Route::get('/admin/newproduct','Admin\ProductsController@newproduct');
    Route::get('/admin/modproduct/{id}','Admin\ProductsController@modproduct');
    Route::post('/admin/uploadcolor','Admin\ProductsController@uploadcolor');
    Route::post('/admin/uploadimage','Admin\ProductsController@uploadimage');
    Route::post('/admin/defaultupload','Admin\ProductsController@defaultupload');
    Route::post('/admin/save','Admin\ProductsController@save');
    Route::post('/admin/updateprodus','Admin\ProductsController@updateprodus');
    Route::post('/admin/delprodus','Admin\ProductsController@delprodus');