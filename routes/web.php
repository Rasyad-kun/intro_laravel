<?php

use app\Models\Inventory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntroController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\InventoryController;

// use app\Http\Controller\IntroController;

// kegunaan web.php sendiri untuk mengorganisir dan memberikan jalur/ mengalihkan pada website? / atau controller

Route::get('/', function () {
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

Route::get('/inventory/{link}', [InventoryController::class, 'show']);

Route::get('/member', [MemberController::class, 'getAll']);

Route::get('/member/{link}', [MemberController::class, 'show']);


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