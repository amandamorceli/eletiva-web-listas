<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormularioExercicio1(){
        return view('lista1.exercicio1');
    }

    public function respostaExercicio1(Request $request){
        $nota1 = floatval($request->input('nota1'));
        $nota2 = floatval($request->input('nota2'));
        $nota3 = floatval($request->input('nota3'));

        $media = number_format(($nota1 + $nota2 + $nota3)/3);
    
        return view("lista1.exercicio1", compact('media'));
    }
}

// extends para fazer a relação de herança