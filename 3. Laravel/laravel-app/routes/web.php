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
    return view('welcome');
});

Route::get('/test', function(){
    return "Hello Laravel";
});

Route::get('/hello/{nama}', function($nama){

    return "Hello ".$nama;

    });

Route::get('/nama/{nama?}', function($nama = null){
    if($nama !== null){
        return "Hello " . $nama;
    } else {
        return "Hello There";
    }
});

Route::get('/coba', [App\Http\Controllers\CobaController::class], 'index');
