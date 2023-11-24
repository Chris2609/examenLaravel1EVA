<?php

use App\Http\Controllers\ManzanaControlador;
use App\Http\Controllers\ProfileController;
use App\Models\Manzana;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/insertarManzana', [ManzanaControlador::class, 'store'])->name('insertarManzana');
    Route::get('/verManzanas', [ManzanaControlador::class, 'index'])->name('verManzanas');
    Route::get('/eliminarManzana', [ManzanaControlador::class, 'destroy'])->name('eliminarManzana');
    Route::get('/modificarManzana/{id}', [ManzanaControlador::class, 'update'])->name('modificarManzana');
});

require __DIR__.'/auth.php';
