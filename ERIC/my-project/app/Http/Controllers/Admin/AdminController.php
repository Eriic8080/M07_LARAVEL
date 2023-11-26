<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{   

    public function bienvenidaAdmin(Request $request){
        $email = $request->input('email');
        $password = $request->input('passwd');

        $emailCorrecta = 'eric@gmail.com'; 
        $passwordCorrecta = 'eric'; 

        if ($email === $emailCorrecta && $password === $passwordCorrecta) {
            return view('Admin.inicioAdmin');
        } else {
            return view('signin');
        }
    }

    public function centres(){
        return view('Admin.centres');
    }
    public function professorat(){
        return view('Admin.professorat');
    }
    public function alumnat(){
        return view('Admin.alumnat');
    }

}