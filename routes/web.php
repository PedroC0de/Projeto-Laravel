<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContatoController;

use App\Http\Controllers\SobrenosController;

use App\Http\Controllers\PrincipalController;

use App\Http\Controllers\TesteController;

use App\Http\Controllers\FornecedorController;
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

Route::get('/', [PrincipalController::class, 'principal'])->name("site.index");

Route::get('/sobrenos', [SobrenosController::class, 'sobrenos'])->name("site.sobrenos");

Route::get('/contato', [ContatoController::class, 'contato'])->name("site.contato");

Route::post('/contato', [ContatoController::class, 'salvar'])->name("site.contato");

Route::get('/login', function(){ return "login";})->name("site.login");


route::prefix("/app")->group(function(){

    Route::get('/clientes', function(){
    return "clientes";
})->name("app.clientes");


Route::get('/fornecedores', [FornecedorController::class, 'index'])->name("app.fornecedores");

Route::get('/produtos', function(){
    return "produtos";
})->name("app.produtos");

});

Route::fallback(function(){
 echo 'Está pagina não existe <a href="'.route('site.index').'">Clique aqui para retornar </a>';
});


Route::get('/teste/{opicional_id}', [TesteController::class, 'teste'])->where('opicional_id','[0-9+]+' );
