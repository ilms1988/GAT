<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\operationController;
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
Route::get('/operaciones',[operationController::class, 'operation'])->name('operation');
Route::get('/baja',[operationController::class, 'baja'])->name('baja');
Route::get('/baja/detalles',[operationController::class, 'bajaD'])->name('bajaDe');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/formabm', [HomeController::class, 'abm']);
