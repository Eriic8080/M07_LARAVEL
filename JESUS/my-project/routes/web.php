<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| comentario de prueba
*/

//Creamos los dos enlaces a la ruta Views para signin.blade y signup.blade
Route::get('/', function () {
   return view('signin');

   
});
Route::get('/', function () {
    return view('signup');
    
});

Route::prefix('nomalumne')->group(function(){
    Route::get('/jesus/signin', function(){
        
    });
    
    Route::get('/jesus/signup', function(){
        
    });
});

Route::prefix('paco')->group(function(){
    //1 tirada de parametros
    Route::get('/signin/{param1}/{param2}/{param3}/{param4}', [SignController::class,'signin']);
    //Segunda tirada de parametros
    Route::get('/signup/{pram1}/{param2}/{param3}', [SignController::class,'signup']);

});

//Metodo para el boton signin y signup
Route::prefix('paco2')->group(function(){
    Route::get('/signin', [SignController::class, 'signin2']) ->name('signin');
    Route::get('/signup', [SignController::class, 'signup2']) ->name('signup');
});

//Metodo post para productos
Route::prefix('metodepost')->group(function(){
   Route::post('/products', [SignController::class, 'products'])->name('products'); 
});