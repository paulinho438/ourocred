<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\VacinaController;

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

Route::get('/', [VacinaController::class, 'index']);
Route::get('/planilha', [VacinaController::class, 'planilha']);
Route::post('/cadastro', [VacinaController::class, 'cadastroAction']);
Route::get('/success', [VacinaController::class, 'success'])->name('success');
Route::get('/pdf/{id}', [VacinaController::class, 'gerarPdf']);

Route::get('/esqueciminhasenha', [HomeController::class, 'esqueci']);
Route::post('/esqueciminhasenha', [HomeController::class, 'esqueciAction']);

Route::prefix('painel')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('admin');
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout']);
    Route::post('login', [AuthController::class, 'authenticate']);

    Route::post('local/check-y', [HomeController::class, 'checkY']);
    Route::post('local/check-n', [HomeController::class, 'checkN']);
    Route::get('contrato/add', [HomeController::class, 'addContrato']);
    Route::post('contrato/add', [HomeController::class, 'addContratoAction']);
    Route::get('local/edit/{id}', [HomeController::class, 'editLocal']);
    Route::post('local/edit/{id}', [HomeController::class, 'editLocalAction']);
    Route::get('local/del/{id}', [HomeController::class, 'delLocal']);
    Route::get('local/{id}', [HomeController::class, 'local'])->name('local');

    Route::get('relatorio', [HomeController::class, 'relatorio']);
    Route::post('relatorio', [HomeController::class, 'relatorioAction']);

    Route::get('planilha/2020', [HomeController::class, 'planilha2020']);
    Route::get('planilha/2020/novo', [HomeController::class, 'planilha2020Novo']);
    Route::post('planilha/2020/novo', [HomeController::class, 'planilha2020NovoAction']);
    Route::get('planilha/2020/delete/{id}', [HomeController::class, 'planilha2020Delete']);

    Route::get('planilha/2021/novas_vendas_2021', [HomeController::class, 'planilha2021NovasVendas']);
    Route::get('planilha/2021/novas_vendas_2021/novo', [HomeController::class, 'planilha2021NovasVendasNovo']);
    Route::post('planilha/2021/novas_vendas_2021/novo', [HomeController::class, 'planilha2021NovasVendasNovoAction']);
    Route::get('planilha/2021/novas_vendas_2021/delete/{id}', [HomeController::class, 'planilha2021NovasVendasDelete']);

    Route::get('campanha', [HomeController::class, 'campanha']);
    Route::get('campanha/{id}', [HomeController::class, 'campanhaId']);

});