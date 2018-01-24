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

Route::get('/mi-primer-ruta',function(){
	return response()->json(["mensaje" => "holaMundo"]);
});

Route::get('/ruta-parametrizada/{usuario}',function($usuario){
	return response()->json(["mensaje" => "hola " . $usuario]);
});
