<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EquipamentoController;

use App\Models\Equipamento;
use App\Models\Registro;
use App\Models\User;

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
    return view('principal');
})->name('principal');

Route::resource('/equipamentos', EquipamentoController::class);



/* Route::get('/registros', function () {
    return Registro::all();
});

Route::get('/equipamentos', function () {
    return Equipamento::all();
});

Route::get('/usuarios', function () {
    return User::all();
}); */
