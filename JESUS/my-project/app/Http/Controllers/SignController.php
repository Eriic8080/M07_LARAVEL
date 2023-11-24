<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller

{
    public function signin($param1, $param2, $param3, $param4){

        $textoFinal = $param1." ".$param2." ".$param3." ".$param4;
        
        return view('signin') ->with('nomalumne', $textoFinal);
    }

    public function signup($param1, $param2 , $param3){
        $textoUp = $param1." ".$param2." ".$param3;
        
        return view('signup') ->with('nomalumne', $textoUp);

    }

    public function hola (Request $request, $persona = '') {
        
        dd($request);
        $textoFinal = 'Hola, ';
        $textoFinal .=($persona == '')?'mundo':$persona;
        return view('mensaje') -> with (['texto' => $textoFinal]);
    }

    public function signin2(){
        return view('signin');
    }
    public function signup2(){
        return view('signup');
    }

    public function products(Request $request){
        $text = $request['product'];
        return view('products')->with(['result'=> $text]);
    }
    
    
}

