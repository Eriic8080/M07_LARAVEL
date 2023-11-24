<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controllers;
    use Illuminate\Http\Request;

    class Admin extends Controller
    {

        public function centres(){
            return view('Admin.admin')-> with(['result'=>'Aqui se muestra los centros que el rol admin puede ver']);
        }
    }