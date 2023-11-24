<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    
    public function signin($a,$b,$c,$d) {
        $textFinal = $a." ".$b." ".$c." ".$d;
        return view('signin') ->with('result',$textFinal); 
        
    }
    public function signup($a,$b,$c) {
        $textFinal = $a." ".$b." ".$c;
        return view('signup')->with('resultado',$textFinal);
        
    }
    
    public function hola(Request $request, $persona = ''){
        dd($request);
        $textoFinal = 'Hola, ';
        $textoFinal .= ($persona == '')? 'mundo':$persona;

        return view(view:'mensaje')-> with (['texto' => $textFinal]);
    }

}