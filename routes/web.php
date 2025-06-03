<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/products/{id}/{name}/{pk}', function ($id, $name, $pk) {
    return "<a href='". route('products', [$id, $name, $pk]) ."'>move to product</a>";
})->name('products for tag {a}');

Route::get('/products/view/{id}/{name}/{pk}', function ($id, $name, $pk) {
    return "view product : id= $id and name= $name and pk= $pk";
})->name('products');

Route::group(['fix' => 'user'], function () {
   Route::get('/', function ()  {
       return  "<a href='". route('user-ali', 5) ."'>move to user ali</a>" ;
   })->name('user-all');
   Route::get('/{id}', function ($id){
       return "user ali"." id= $id";
   })->name('user-ali');
   Route::get('/ali/test/', function (){
       return 'user ali test';
   })->name('user-ali-test');
});

Route::fallback(function () {
    return '404 Not Found';
});


