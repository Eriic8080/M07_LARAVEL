<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{   

    public function usuaris(){
        return view('Admin.admin')->with(['result'=>'Aqui se muestran los centros que el rol admin puede ver']);

    }


    //hay que hacer 3 funciones mas una para cada cosa
    public function centres(){
        return view('Admin.admin')->with(['result'=>'Aqui se muestran los centros que el rol admin puede ver']);

    }
}