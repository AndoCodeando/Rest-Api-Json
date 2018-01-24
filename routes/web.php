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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-primer-ruta',function(){
	return response()->json(["mensaje" => "holaMundo"]);
});

Route::get('/ruta-parametrizada/{usuario}',function($usuario){
	return response()->json(["mensaje" => "hola " . $usuario]);
});

Route::get('/login/{usuario}/{p}',function($usuario,$password){
	if($usuario == "AndoCodeando" && $password == "1.2..3...")
		return response()->json(["mensaje" => "hola " . $usuario]);
	else
		return response()->json(["mensaje" => "login fallido"]);
	
});


Route::post('/login',function(Request $re){

	$usuario = $re->input("usuario");
	$password = $re->input("password");

	if($usuario == "AndoCodeando" && $password == "1.2..3...")
		return response()->json(["mensaje" => "hola " . $usuario]);
	else
		return response()->json(["mensaje" => "login fallido"]);
	
});



Route::get('/token',function(){
	echo csrf_token();	
});