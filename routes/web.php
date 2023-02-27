<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Rota para view login inicial
Route::get('/', function () {
    return view('auth.login');
});

// Rota para a pagina Dashboard
Route::get('/home', 'HomeController@index')->name('home');

// Rota para a pagina profile
Route::get('/profile', 'ProfileController@index')->name('profile');

// Rota para a pagina profile update
Route::put('/profile', 'ProfileController@update')->name('profile.update');


// ************* Rota clientes *****************

// Rota para view cadastro de clientes
Route::get('/cadastro/clientes', [ClienteController::class, 'create'])->name('cliente.create');

// Rota para salvar o cliente no banco
Route::post('/cliente/save', [ClienteController::class, 'store'])->name('cliente.store');

// Rota para a view editar cliente
Route::get('/editar/cliente/{id}', [ClienteController::class, 'edit'])->name('cliente.edit')->middleware('auth');

// Rota para editar o cliente no banco
Route::put('/update/cliente/{id}', [ClienteController::class, 'update'])->name('update.cliente')->middleware('auth');

// Rota para deletar o cliente no banco
Route::delete('/cliente/delete/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy')->middleware('auth');

// Rota para a lista de clientes
Route::get('/lista/clientes', [ClienteController::class, 'index'])->name('lista.cliente.index');

// Informação de cadastro do cliente
Route::get('/info/cliente/{id}', [ClienteController::class, 'info'])->name('cliente.info');

// ************* Rota clientes *****************

// ************* Rota orçamentos *****************

// Rota para a viw cadastrar orçamento
Route::get('/cadastro/orcamento', [OrcamentoController::class, 'create'])->name('orcamento.create')->middleware('auth');

// Rota para salvar orçamento no banco
Route::post('/save/orcamento', [OrcamentoController::class, 'store'])->name('orcamento.store')->middleware('auth');

// lista de orçamentos
Route::get('/lista/orcamento', [OrcamentoController::class, 'listaOrcamento'])->name('lista.orcamento')->middleware('auth');

// ************* Rota orçamentos *****************


// Rota para pg de usuários
Route::get('/usuarios', [ProfileController::class, 'usuarios'])->name('usuarios')->middleware('auth');


// Rota para a pagina about
Route::get('/about', function () {
    return view('about');
})->name('about');
