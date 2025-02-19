<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

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

// Rota para minha lista de exercícios
Route::get('/exercicios', function () {
    return view('layout');
});

// Rota para meu exercíco
Route::get('/exercicio1', function () {
    return view('exercicio1');
});

//para envio de dados do formulário, é necessário enviar o obj request
Route::post('/exercicio1resp', function(Request $request){
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    
    $soma = $valor1 + $valor2;

    // return view('/exercicio1', ['soma' => $soma ])
    return view('/exercicio1', compact('soma')) ; 
});

Route::get('/lista1/exercicio1', function(){
    return view('lista1.exercicio1');
});

Route::post('/lista1/resp1', function(Request $request){
    $nota1 = floatval($request->input('nota1'));
    $nota2 = floatval($request->input('nota2'));
    $nota3 = floatval($request->input('nota3'));

    $media = ($nota1 + $nota2 + $nota3)/3;
    
    return view("lista1.exercicio1", compact('media'));
});

Route::get('/lista1/exercicio2', function(){
    return view('lista1.exercicio2');
});

Route::post('/lista1/resp2', function(Request $request){
    $temperatura = floatval($request->input('temperatura'));

    $temperaturaConvertida=;
    
    return view("lista1.exercicio2", compact('$temperaturaConvertida'));
});