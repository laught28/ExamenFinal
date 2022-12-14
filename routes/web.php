<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutitasC;
use App\Http\Controllers\Paginas;

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

Route::get('/', [Paginas::class, 'fhome'])->name('NHome');
Route::get('/crear', [Paginas::class, 'fingresar'])->name('Ncrear');

Route::post('/guardarFruta', [Paginas::class, 'procesarFruta'])->name('NProcesar');


Route::get('/fruta/create', [FrutitasC::class, 'create'])->name('fruta.create');


Route::post('/fruta', [FrutitasC::class, 'store'])->name('fruta.store');

Route::get('/fruta', [FrutitasC::class, 'index'])->name('fruta.index');

Route::get('/fruta/{id}/edit', [FrutitasC::class, 'edit'])->name('fruta.edit');

Route::put('/fruta/{id}', [FrutitasC::class, 'update'])->name('fruta.update');

Route::get('/fruta/{id}/confirm', [FrutitasC::class, 'confirm'])->name('fruta.confirm');

Route::delete('/fruta/{id}', [FrutitasC::class, 'destroy'])->name('fruta.destroy');
