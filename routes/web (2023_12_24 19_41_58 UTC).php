<?php

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pruecontroller;

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

//ruta para entrar con ahref con name 



route::get('/', [pruecontroller::class, 'inicio'])->name('inicio');
route::get('/formulario', [pruecontroller::class, 'formulario'])->name('formulario');
route::POST('/registro', [pruecontroller::class, 'registro'])->name('registro');
route::post('/registro2',[pruecontroller::class, 'registro2'])->name('registro2');