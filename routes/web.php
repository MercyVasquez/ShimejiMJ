<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CroshetController;

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
//Route::get('/Mercy', CroshetController::class, 'Formulario');
Route::get('/Registro', function () {
    return view('Register');
 }); 
 Route::get('/Login', function () {
    return view('Login');
 }); 
Route::get('/', function () {
    return view('welcome');
});

 Route::get('/carrito', function () {
    return view('Carrito');
 }); 