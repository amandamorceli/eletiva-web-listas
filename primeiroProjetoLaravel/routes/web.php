<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/exercicio', function () {
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