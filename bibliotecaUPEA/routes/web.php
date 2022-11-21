<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', [UserController::class, 'show']);

Route::post('/registro', [UserController::class, 'registro']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/libro', [LibroController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);

//RUTA DE CATEGORIA
Route::resource('/categoria', CategoriaController::class);

//RUTA DE EDITORIAL
Route::resource('/editorial', EditorialController::class);

//RUTA DE AUTOR
Route::resource('/autores', AutorController::class);


//RUTA DE USUARIOS
Route::resource('/usuarios', UserController::class);

//RUTA DE LIBRO
Route::resource('/libros', LibroController::class);

//RUTA DE PRESTAMO
Route::resource('/prestamos', PrestamoController::class);