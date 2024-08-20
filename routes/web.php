<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

/*Route::get('/', function () {
    return 'welcome';
});*/

Route::get('/',[Controllers\PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/contato', [Controllers\ContatoController::class, 'contato']);

//testando parametros na rota
//parametros opcionais tem que ser passado da direita para a esquerda se não o laravel não entende
//isso pode ser contornado criando uma logica para tratar isso
Route::get('/contato/{nome}/{mensagem?}', 
    function(string $nome, string $mensagem = 'nada'){
        echo "Meu nome é $nome e quero dizer $mensagem";
    }
);