<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::get('/tr', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::group(["middleware" => ["admin_mi", "auth"]], function () {

    Route::group(["namespace" => "Admin"], function () {

        Route::get("/site-ayarlari", "AyarController@index");
        Route::put("/site-ayarlari/guncelle", "AyarController@guncelle");
        Route::resource("user", "UserController");
        Route::resource("kategori", "KategoriController");
        Route::resource("makale", "MakaleController");
        Route::resource("guide", "HomeController@guide");

    });
});

Route::get("/tr/{slug}","MakaleController@index");
Route::get("/tr/kategoriler/{slug}","KategoriController@index");



/*
 *
 * ENGLISH EDITION
 *
 *
 */


Route::get('/en','EnHomeController@index');
Route::get('/en/{slug}','EnMakaleController@index');