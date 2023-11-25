<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::middleware(['admin_db']) ->group(function(){
    Route::get('centres', [AdminController::class, 'centres'])->name('centres');
    Route::get('alumnat', [AdminController::class, 'alumnat'])->name('alumnat');
    Route::get('professorat', [AdminController::class, 'professorat'])->name('professorat');
});


//Metodo post para usuarios
Route::prefix('usuaris')->group(function () {
    Route::any('users', [AdminController::class, 'users'])->name('users'); 
});
//Aquí usamos ANY para el callback para que le de igual si es GET o POST gracias al any.
Route::any('adminView', [AdminController::class, 'adminView'])->name('adminView');
