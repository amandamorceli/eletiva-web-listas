<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosLista2;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lista', function () {
    return view('layout');
});

Route::get('/lista2/exercicio1', [ExerciciosLista2::class, 'abrirFormularioExercicio1']);

Route::post('/lista2/resp1', [ExerciciosLista2::class, 'respostaExercicio1']);

Route::get('/lista2/exercicio2', [ExerciciosLista2::class, 'abrirFormularioExercicio2']);

Route::post('/lista2/resp2', [ExerciciosLista2::class, 'respostaExercicio2']);

Route::get('/lista2/exercicio3', [ExerciciosLista2::class, 'abrirFormularioExercicio3']);

Route::post('/lista2/resp3', [ExerciciosLista2::class, 'respostaExercicio3']);

Route::get('/lista2/exercicio4', [ExerciciosLista2::class, 'abrirFormularioExercicio4']);

Route::post('/lista2/resp4', [ExerciciosLista2::class, 'respostaExercicio4']);

Route::get('/lista2/exercicio5', [ExerciciosLista2::class, 'abrirFormularioExercicio5']);

Route::post('/lista2/resp5', [ExerciciosLista2::class, 'respostaExercicio5']);

Route::get('/lista2/exercicio6', [ExerciciosLista2::class, 'abrirFormularioExercicio6']);

Route::post('/lista2/resp6', [ExerciciosLista2::class, 'respostaExercicio6']);

Route::get('/lista2/exercicio7', [ExerciciosLista2::class, 'abrirFormularioExercicio7']);

Route::post('/lista2/resp7', [ExerciciosLista2::class, 'respostaExercicio7']);

Route::get('/lista2/exercicio8', [ExerciciosLista2::class, 'abrirFormularioExercicio8']);

Route::post('/lista2/resp8', [ExerciciosLista2::class, 'respostaExercicio8']);