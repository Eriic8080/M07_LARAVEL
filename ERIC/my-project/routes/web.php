<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;
use App\Http\Controllers\PrimerController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CentresController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function(){   //con prefix('users') creo una direccion en la que despues dentro voy creando subcarpetas ejemplo: localhost:8000/users/...
    Route::get('/nom1', function(){         //Aqui voy creando las subcarpetas que quiero que tenga la carpeta users   
        return 'Eric';
    });
    Route::get('/nom2',function(){
        return 'Roger';
    });
});


Route::prefix('primerControlador')->group(function(){
    Route::get('/usuario1',[PrimerController::class, 'usuario1']);
    Route::get('/usuario2', [PrimerController::class, 'usuario2']);
});

Route::get('/conexion', function () {
    return view('dbcon');
    
});

/*
//Sign In por rutas path
Route :: get('/ericsanchez/signin', function (){
    return view('signin');
});
//Sign Up por rutas path
Route :: get('/ericsanchez/signup', function (){
    return view('signup');
});
*/

//Sign In y Up por Controller
/*Practica 1
Route::prefix('ericsanchez')->group(function(){
    Route::get('/signin/{param1}/{param2}/{param3}/{param4}',[SignController::class, 'signin']);
    Route::get('/signup/{param1}/{param2}/{param3}',[SignController::class, 'signup']);


});*/

//Practica 2
Route::prefix('ericsanchez')->group(function(){
    Route::get('/signin',[SignController::class, 'signin'])->name('signin');
    Route::get('/signup',[SignController::class, 'signup'])->name('signup');


});

Route::prefix('admin_db')->group(function(){
    Route::post('/usuaris', [AdminController::class, 'bienvenidaAdmin'])->name('bienvenidaAdmin');
    Route::get('/centres', [CentresController::class, 'index'])->name('centres');
    Route::view('/bienvenido', 'Admin.inicioAdmin')->name('inicio');
    Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');
    Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');
    Route::view('/crearCentros','Admin.crearCentros')->name('crearCentros');
    Route::post('/crearCentros',[CentresController::class, 'store'])->name('creandoCentro');
    Route::get('/index', [CentresController::class, 'index'])->name('index');

});



