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

Route::get('/home', function () {
    $data = [
        "name" => "Roberto",
        "surname" => "Zeppilli",
        "age" => 29,
        "todos" => [
            "fare la lavatrice",
            "comprare il pane",
            "studiare Laravel",
            "studiare MySQL",
            "studiare tutto"
        ]
    ];
    return view('home', $data);
});

Route::get('/contatti', function () {
    $data = [
        "name" => "Roberto",
        "surname" => "Zeppilli",
        "age" => 29,
        "mail" => "robzep171@gmail.com"
    ];
    return view('contatti', $data);
});

Route::get('/chi-siamo', function () {
    $data = [
        "name" => "Roberto",
        "surname" => "Zeppilli",
        "age" => 29,
        "description" => "Studio da Web Developer, mi piace suonare la chitarra e scattare fotografie"
    ];
    return view('chi-siamo', $data);
});
