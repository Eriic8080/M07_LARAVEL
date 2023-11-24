<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    /*Paractica 1
    public function signin($a,$b,$c,$d) {
        $textFinal = $a." ".$b." ".$c." ".$d;
        return view('signin') ->with('result',$textFinal); 
        
    }
    public function signup($a,$b,$c) {
        $textFinal = $a." ".$b." ".$c;
        return view('signup')->with('resultado',$textFinal);
        
    }
    */
    //Practica 2
    public function signin() {
        return view('signin');
        
    }
    public function signup() {
        return view('signup');
        
    }

    public function products(Request $request){
        $text = $request['product'];
        return view('products')->with(['result'=>$text]);

    }
}