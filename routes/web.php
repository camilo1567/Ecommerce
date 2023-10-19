<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('inicio');

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/inicio/productos/{categoria}', [InicioController::class, 'productosPorCategoria'])->name('inicio.productosPorCategoria');
Route::get('/inicio/producto/{producto}', [InicioController::class, 'producto'])->name('inicio.producto');

Route::get('/dashboard', function () {
    return redirect()->route('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/categorias',CategoriaController::class);
    Route::resource('/productos',ProductoController::class);

});

require __DIR__.'/auth.php';
