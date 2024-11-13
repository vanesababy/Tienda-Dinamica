<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

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
});


// Route::get('/', [TiendaController::class, 'index'])->name('home');
// Route::get('/categoria/{tema}', [TiendaController::class, 'mostrarCategoria'])->name('categoria');
// Route::get('/registro', [TiendaController::class, 'registro'])->name('registro');


Route::get('/', [TiendaController::class, 'inicio'])->name('inicio');
Route::get('/login/{tema?}', [TiendaController::class, 'mostrarLogin'])->name('login');
Route::get('/register/{tema?}', [TiendaController::class, 'mostrarRegister'])->name('register');


require __DIR__.'/auth.php';
