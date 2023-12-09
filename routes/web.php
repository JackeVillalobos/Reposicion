<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;



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
    return view('index');
});

Route::get('/empleado', [EmpleadoController::class, 'index'])->name('empleado.index');

Route::get('/empleado/crear', [EmpleadoController::class, 'create'])->name('empleado.crear');

Route::post('/empleado/guardar', [EmpleadoController::class, 'store'])->name('empleado.store');



Route::get('/producto', [ProductoController::class, 'index'])->name('producto.index');

Route::get('/producto/crear', [ProductoController::class, 'create'])->name('producto.crear');

Route::post('/producto/guardar', [ProductoController::class, 'store'])->name('producto.store');


Route::get('/proveedore', [ProveedorController::class, 'index'])->name('proveedore.index');

Route::get('/proveedore/crear', [ProveedorController::class, 'create'])->name('proveedore.crear');

Route::post('/proveedore/guardar', [ProveedorController::class, 'store'])->name('proveedore.store');


Route::get('/proveedor', [ProveedorController::class, 'index'])->name('proveedor.index');
Route::get('/producto/save', [ProveedorController::class, 'create'])->name('proveedor.save');
Route::post('/producto/create', [ProveedorController::class, 'create'])->name('proveedor.create');
