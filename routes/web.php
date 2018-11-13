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
    return view('homepage.home');
});


Route::get('/js/data.json', function(){
    $path = 'C:\Users\lennart\bootcamp\laravel_test\resources\js\data.json';
    return response()->file($path);

});