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
    $nome = "Pedro";
    $arr = [10,20,30,40,50];
    $nomes = ["Tatiana", "Thiago", "Thaís", "Felipe"];
    return view('welcome',
    ['nome' => $nome,
    'profissao' => "programador",
    'idade' => 20,
    'arr' =>$arr,
    'nomes' => $nomes ]);
});

Route::get('/contact', function () {
    return view('contact');
});

