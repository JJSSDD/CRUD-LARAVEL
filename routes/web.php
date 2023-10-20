<?php

use App\Http\Controllers\equipoController;
use App\Http\Controllers\UserRegisterController;
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
    return view('login');
})->name('login.index');

Route::get('/logout',[UserRegisterController::class, 'logout'])->name('login.logout');

Route::post('/',[UserRegisterController::class, 'login_post'])->name('login');

Route::get('/registrar', function () {
    return view('registrar');
});

Route::get('/registrado', function () {
    return view('registrado');
})->name('user.created');

Route::get('/index', function () {
    return view('admin/index');
})->name('equipo.index');

Route::get('/creacion', function () {
    return view('admin/crear');
});

Route::get('/modificar', function () {
    return view('admin/editar');
})->name('equipo.modificar');

Route::get('/datatable', [equipoController::class, 'data'])->name('datatable.equipo');


Route::post('/crear',[equipoController::class, 'crear'])->name('equipo.created');
Route::put('/editar', [equipoController::class, 'editar'])->name('equipo.editar');
Route::delete('/eliminar', [equipoController::class, 'eliminar'])->name('equipo.eliminar');

Route::post('/store',[UserRegisterController::class, 'store'])->name('user.store');

