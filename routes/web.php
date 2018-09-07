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
    $name = "mohand";
    $code = "mohand";

    $test = array(
        'name' => 'mohand1',
        'code' => 75019
    );
    return view('test', $test);
});

Route::get('/help', function () {
    return view('help');
});
