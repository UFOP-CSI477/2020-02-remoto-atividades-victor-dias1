<?php

use App\Models\Produto;
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

Route::get('/produtos/todos', function () {
    $produtos = Produto::all();
    return view('lista', ['dados' => $produtos]);
});

Route::get('/produtos/{id}', function ($id) {
    $produto = Produto::find($id);
    if ($produto == null) {
        return 'ID inválido!';
    } else {
        return view('lista', ['dados' => $produto]);
    }
});
