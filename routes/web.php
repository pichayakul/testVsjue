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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view("/home.home");
});
Route::get('/profile', function () {
    return view("/home.profile");
});
Route::get('/1', function () {
    $c = array("1","2");

    return ["story" => 30];
});