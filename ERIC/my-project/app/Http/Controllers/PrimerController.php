<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
    
    public function usuario1() {
        return view('viewUsuaris') ->with('nomUsuari','Usuari1: Eric');
        
    }
    public function usuario2() {
        return "Usuario 2 es Roger";
        
    }

}