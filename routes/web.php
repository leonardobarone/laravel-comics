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
    
    $data = config('comics');
    $tmp = [
        "dischi" => $data
    ];
    $data2 = config('options');
    $tmp2 = [
        'options' => $data2
    ];

    // formula contratta
    // return view('home', ["data" => $data]);
    return view('home', $tmp, $tmp2);
})->name('home');
