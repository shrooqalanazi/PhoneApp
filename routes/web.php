<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $phone=[
    "Type"=>"iphone14",
    "price"=>3500,
    "color"=>"black"

  ];
return view ("welcome",$phone);
});

Route::get('/twiq', function () {
    return view('twiq');
});


Route::get('/sa', function () {
    return view('saudi');
});


Route::get('/shrooq', function () {
    return view('shrooq.s1');
});

