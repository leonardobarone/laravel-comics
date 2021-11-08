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




Route::get('/disco/{id}', function($id) {
    $data = config('comics');
    if ($id >= count($data)) {
        abort('404');
    } else {
        $disco = $data[$id];
    }

    return view('disco', $disco);
})->where('id', '[0-9]+')->name('singolo-disco');