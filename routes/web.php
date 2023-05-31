<?php


use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\TesztController;
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


Route::get('/tesztek', [TesztController::class, 'index']);
Route::get('/tesztekNevvel', [TesztController::class, 'kategoriaNevvel']);
Route::get('/tesztek/kategoria/{id}', [TesztController::class, 'show']);
Route::get('/kategoria', [KategoriaController::class, 'index']);