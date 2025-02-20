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

    $temperaturaConvertida = $temperatura * 1.8 + 32;
    $temperaturaConvertida = number_format($temperaturaConvertida,1); 
    
    return view("lista1.exercicio2", compact('temperaturaConvertida'));
});

Route::get('/lista1/exercicio3', function(){
    return view('lista1.exercicio3');
});

Route::post('/lista1/resp3', function(Request $request){
    $temperatura = floatval($request->input('temperatura'));

    $temperaturaConvertida = ($temperatura - 32) * (5/9);
    $temperaturaConvertida = number_format($temperaturaConvertida, 1); 
    
    return view("lista1.exercicio3", compact('temperaturaConvertida'));
});

Route::get('/lista1/exercicio4', function(){
    return view('lista1.exercicio4');
});

Route::post('/lista1/resp4', function(Request $request){
    $altura = floatval($request->input('altura'));
    $largura = floatval($request->input('largura'));

    $area = $altura * $largura;
    $area = number_format($area, 2); 
    
    return view("lista1.exercicio4", compact('area'));
});

Route::get('/lista1/exercicio5', function(){
    return view('lista1.exercicio5');
});

Route::post('/lista1/resp5', function(Request $request){
    $raio = floatval($request->input('raio'));
    
    $area = ($raio ** 2) * pi();
    $area = number_format($area, 2); 
    
    return view("lista1.exercicio5", compact('area'));
});

Route::get('/lista1/exercicio6', function(){
    return view('lista1.exercicio6');
});

Route::post('/lista1/resp6', function(Request $request){
    $altura = floatval($request->input('altura'));
    $largura = floatval($request->input('largura'));

    $perimetro = 2 * ($altura + $largura);
    $perimetro = number_format($perimetro, 2);
    
    return view("lista1.exercicio6", compact('perimetro'));
});

Route::get('/lista1/exercicio7', function(){
    return view('lista1.exercicio7');
});

Route::post('/lista1/resp7', function(Request $request){
    $raio = floatval($request->input('raio'));

    $perimetro = 2 * $raio * pi();
    $perimetro = number_format($perimetro, 2);
    
    return view("lista1.exercicio7", compact('perimetro'));
});

Route::get('/lista1/exercicio8', function(){
    return view('lista1.exercicio8');
});

Route::post('/lista1/resp8', function(Request $request){
    $base = floatval($request->input('base'));
    $expoente = floatval($request->input('expoente'));

    $resultado = number_format($base ** $expoente, 0);
    
    return view("lista1.exercicio8", compact('resultado'));
});

Route::get('/lista1/exercicio9', function(){
    return view('lista1.exercicio9');
});

Route::post('/lista1/resp9', function(Request $request){
    $metros = floatval($request->input('metros'));

    $centimetros = number_format($metros * 100, 2);
    
    return view("lista1.exercicio9", compact('centimetros'));
});

Route::get('/lista1/exercicio10', function(){
    return view('lista1.exercicio10');
});

Route::post('/lista1/resp10', function(Request $request){
    $kms = floatval($request->input('kms'));

    $milhas = number_format($kms * 0.621371, 2);
    
    return view("lista1.exercicio10", compact('milhas'));
});

Route::get('/lista1/exercicio11', function(){
    return view('lista1.exercicio11');
});

Route::post('/lista1/resp11', function(Request $request){
    $peso = floatval($request->input('peso'));
    $altura = floatval($request->input('altura'));

    $resultado = number_format($peso / $altura ** 2, 2);
    
    return view("lista1.exercicio11", compact('resultado'));
});

Route::get('/lista1/exercicio12', function(){
    return view('lista1.exercicio12');
});

Route::post('/lista1/resp12', function(Request $request){
    $preco = floatval($request->input('preco'));
    $desconto = (floatval($request->input('desconto'))) / 100;

    $resultado = number_format($preco - ($preco * $desconto), 2, ',', '.');
    
    return view("lista1.exercicio12", compact('resultado'));
});

Route::get('/lista1/exercicio13', function(){
    return view('lista1.exercicio13');
});

Route::post('/lista1/resp13', function(Request $request){
    $capital = floatval($request->input('capital'));
    $juros = floatval($request->input('juros'));
    $periodo = floatval($request->input('periodo'));

    $resultado = number_format($capital * $juros * $periodo, 2, ',', '.');
    
    return view("lista1.exercicio13", compact('resultado'));
});