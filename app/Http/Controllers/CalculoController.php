<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller
{
    public function formcalculadora() {
        return view('formcalculadora');
    }

    public function ejecucion(Request $request) {
        
        $n1 = (float)$request->input('n1');
        $n2 = (float)$request->input('n2');
        $op = $request->input('op');
        $resultado = 0;
        $operador = "";
        if($op=="+"){
            $resultado = $n1 + $n2;
            $operador = " de la Suma entre";
        }else if($op=="-"){
            $resultado = $n1 - $n2;
            $operador = " de la Resta entre";
        }else if($op=="*"){
            $resultado = $n1 * $n2;
            $operador = " de la Multiplicación entre";
        }else if($op=="/"){
            if($n2 == 0){
                $resultado = "Indefinido";
            }else{
                $resultado = $n1 / $n2;
            }
            $operador = " de la División entre:";
        }else{
            $resultado = pow($n1, $n2);
            $operador = " de la Potenciación entre:";
        }
        return view('ejecucion', [
            
            'n1' => $n1,
            'n2' => $n2,
            'resultado' => $resultado,
            'operador' => $operador,
        ]);
    }
}
