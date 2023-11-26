<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\AdminController;


    Route::middleware(['admin_db'])->group(function(){
        Route::get('/bienvenidaAdmin',[AdminController::class,'bienvenidaAdmin']);
    })->name('admin_db');
?>