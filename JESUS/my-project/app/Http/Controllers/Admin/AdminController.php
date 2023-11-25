<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;  // Asegúrate de importar la clase Request

class AdminController extends Controller
{
    public function users(Request $request){  // Añade el parámetro $request aquí
        $email = $request->input('email','');  // Cambia $name a $email para reflejar el campo 'email'
        $password = $request->input('password','');
        
       //Auí compruebol si los dos campos estan vacios, si lo estan retornará la web signin
        if (empty($email) && empty($password)) {
            return view('signin');
            
        }else {
            
            return view('Admin.admin');
        }
    }
    public function adminView(){
        return view('Admin.admin');
    }
    public function alumnat(){
        $alumnatData = [
            [
                'id' => 1,
                'name' => 'Carles',
                'surname' => 'Canals',
                'rol' => 'Alumne',
                'email' => 'roger@roger.com',
            ],
            [
                'id' => 2,
                'name' => 'Sofia',
                'surname' => 'Teraco',
                'rol' => 'Alumne',
                'email' => 'sara@sara.com',
            ],
            [
                'id' => 3,
                'name' => 'Francesc',
                'surname' => 'Riugal',
                'rol' => 'Alumne',
                'email' => 'pere@pere.com',
            ],
            [
                'id' => 4,
                'name' => 'Laia',
                'surname' => 'Manresa',
                'rol' => 'Alumne',
                'email' => 'sara@sara.com',
            ],

        ];
        return view('Admin.alumnat', ['alumnatData' => $alumnatData]);
    }
    //Creamos el arrray del array associativo, para luego usarlo en el centres.blade
    public function centres(){
        $centresData = [
            [
                'id' => 1,
                'name' => 'Institut TIC de Barcelona',
                'address' => 'C/ de Sancho de Ávila,133',
                'cp' => '08018',
                'city' => 'Barcelona',
            ],
            [
                'id' => 2,
                'name' => 'Jaume Balmes',
                'address' => 'C/diputació,150',
                'cp' => '08013',
                'city' => 'Barcelona',
            ],
           
        ];
    
        return view('Admin.centres', ['centresData' => $centresData]);
    }
    public function professorat(){
        $professoratData = [
            [
                'id' => 1,
                'name' => 'Roger',
                'surname' => 'Sobrino',
                'rol' => 'Professor',
                'email' => 'roger@roger.com',
            ],
            [
                'id' => 2,
                'name' => 'Sara',
                'surname' => 'Gonzalez',
                'rol' => 'Professora',
                'email' => 'sara@sara.com',
            ],
            [
                'id' => 3,
                'name' => 'Pere',
                'surname' => 'Guitart',
                'rol' => 'Professor',
                'email' => 'pere@pere.com',
            ],
            [
                'id' => 4,
                'name' => 'Oriol',
                'surname' => 'Xisco',
                'rol' => 'Professor',
                'email' => 'sara@sara.com',
            ],
           
           
        ];
    
        return view('Admin.professorat', ['professoratData' => $professoratData]);
    }
      
    
}
