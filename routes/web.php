<?php
//    ---- link------   controller classname
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/', [CustomerController::class, 'index'])->name('index');

//                   controller name and mathod name        Route_name
Route::post('/', [CustomerController::class, 'create'])->name('store');
Route::get('/show', [CustomerController::class, 'show'])->name('show');
Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [CustomerController::class, 'update'])->name('update');
Route::get('/delete/{id}', [CustomerController::class, 'destroy'])->name('destroy');
