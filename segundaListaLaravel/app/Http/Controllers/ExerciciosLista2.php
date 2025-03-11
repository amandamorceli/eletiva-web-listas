<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosLista2 extends Controller
{
    public function abrirFormularioExercicio1(){
        return view('lista2.exercicio1');
    }

    public function respostaExercicio1(Request $request){
        $valor1 = floatval($request->input('valor1'));
        $valor2 = floatval($request->input('valor2'));

        if ($valor1 != $valor2) {
            $resultado = $valor1 + $valor2;
        } else {
            $resultado = (3 * ($valor1 + $valor2));
        };
    
        return view("lista2.exercicio1", compact('resultado'));
    }

    public function abrirFormularioExercicio2(){
        return view('lista2.exercicio2');
    }

    public function respostaExercicio2(Request $request){
        $valorA = floatval($request->input('valorA'));
        $valorB = floatval($request->input('valorB'));

        if ($valorA == $valorB) {
            $resultado = "Números iguais: $valorA";
        } else {
            $menor = min($valorA, $valorB);
            $maior = max($valorA, $valorB);
            $resultado = "$menor $maior";
        };
    
        return view("lista2.exercicio2", compact('resultado'));
    }

    public function abrirFormularioExercicio3(){
        return view('lista2.exercicio3');
    }

    public function respostaExercicio3(Request $request){
        $valor = floatval($request->input('valor'));

        if ($valor > 100) {
            $valor -= ($valor * 0.15) ;
        }
    
        return view("lista2.exercicio3", compact('valor'));
    }

    public function abrirFormularioExercicio4(){
        return view('lista2.exercicio4');
    }

    public function respostaExercicio4(Request $request){
        $numero = intval($request->input('numero'));

        function ehPrimo($num) {
            if ($num < 2) return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        
        function primosAte($limite) {
            for ($i = 1; $i <= $limite; $i++) {
                if (ehPrimo($i)) {
                    $primos[] = $i;
                }
            }
            return $primos;
        }

        $primos = primosAte($numero);

        return view("lista2.exercicio4", compact('numero','primos'));
    }

    public function abrirFormularioExercicio5(){
        return view('lista2.exercicio5');
    }

    public function respostaExercicio5(Request $request){
        $numero = intval($request->input('numero'));

        switch ($numero) {
            case 1:
                $mes = "Janeiro";
                break;
            case 2:
                $mes = "Fevereiro";
                break;
            case 3:
                $mes = "Março";
                break;
            case 4:
                $mes = "Abril";
                break;
            case 5:
                $mes = "Maio";
                break;
            case 6:
                $mes = "Junho";
                break;
            case 7:
                $mes = "Julho";
                break;
            case 8:
                $mes = "Agosto";
                break;
            case 9:
                $mes = "Setembro";
                break;
            case 10:
                $mes = "Outubro";
                break;
            case 11:
                $mes = "Novembro";
                break;
            case 12:
                $mes = "Dezembro";
                break;
            default:
                $mes = "Inválido";
                break;
        }
    
        return view("lista2.exercicio5", compact('mes'));
    }

    public function abrirFormularioExercicio6(){
        return view('lista2.exercicio6');
    }

    public function respostaExercicio6(Request $request){
        $numero = floatval($request->input('numero'));

        for ($i=1; $i <= $numero ; $i++) { 
            $numeros[] = $i;
        }

        return view("lista2.exercicio6", compact('numeros'));
    }

    public function abrirFormularioExercicio7(){
        return view('lista2.exercicio7');
    }

    public function respostaExercicio7(Request $request){
        $numero = intval($request->input('numero'));
        $soma = 0;
        $i = 1;

        while ($i <= $numero) {
            $soma += $i;
            $i++;
        }

        return view("lista2.exercicio7", compact('soma'));
    }

    public function abrirFormularioExercicio8(){
        return view('lista2.exercicio8');
    }

    public function respostaExercicio8(Request $request){
        $numero = intval($request->input('numero'));
        $auxiliar = $numero;
        $i = 1;

        do {
            $numeros[] = $auxiliar;
            $auxiliar -= 1;
            $i++;
        } while ($i <= $numero);

        return view("lista2.exercicio8", compact('numeros'));
    }
}
