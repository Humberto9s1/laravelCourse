<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);

Route::get('produtos/inserir', function () {
    return "Página de inserir produto";
});

Route::get('produtos/{nome}/{valor?}', function ($nome, $valor=null) {
    if ($valor) {
        return "O nome do produto é $nome e seu valor é $valor";    
    }else{
        return "O nome do produto é $nome!";    
    }    
});

Route::get('produtos', function () {
    return "Página de produtos";
});