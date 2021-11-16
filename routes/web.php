<?php

use Illuminate\Support\Facades\Route;
use app\Models\inventory;
use app\Http\Controllers\InventoryController;

// use app\Http\Controller\IntroController;



Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
    ]);
});

Route::get('/inventory', [InventoryController::class, 'index']);

Route::get('/inventory/{link}', [InventoryController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function() {
//     return 'Hello World !';
// });

// //basic route
// Route::get("/salam_pembuka", [IntroController::class, 'salamPembuka']);

// //route with parameter "id"
// Route::get("/Product/{id}", [IntroController::class, 'detailProduct']);

// // route with double parameter "product_id & commnet_id"
// Route::get("/Product/id/{product_id}/status/{comment_id}", 
// [IntroController::class, 'detailProductDouble']);

// // route with 2 http method
// Route::match(["PUT", "GET"], "/Product/{id}", 
// [IntroController::class, 'detailProductDouble']);

// // route grup
// Route::group(["prefix => product"], function(){
//     Route::get("/list", [IntroController::class, 'index']);
//     Route::get("/orders", [IntroController::class, 'index']);
// });

// // route view
// Route::view("/path", "product.view");