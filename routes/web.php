<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/route1', function () {
    return 'This is route 1';
});

Route::get('/route2', function () {
    return 'This is route 2';
});

Route::redirect('/route1', '/route2');

Route::get('/output/{string}', function ($string) {
    return $string;
});

