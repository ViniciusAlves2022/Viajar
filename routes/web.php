<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViajarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/editar-viajar',[ViajarController::class,'MostrarEditarViajar'])->name('editar-viajar');
Route::get('/cadastrar-viajar',[ViajarController::class,'FormularioCadastro'])->name('cadastrar-viajar');
Route::post('/cadastrar-viajar',[ViajarController::class,'SalvarBanco'])->name('salvar-banco');
//deletar

Route::delete('/editar-viajar/{registrosViajar}',[ViajarController::class,'ApagarBancoViajar'])->name('apagar-viajar');
//alterar viajar
Route::get('/alterar-viajar/{registrosViajar}',[ViajarController::class,'MostrarAltrearViajar'])->name('alterar-viajar');
Route::put('/editar-viajar/{registrosViajar}',[ViajarController::class,'AlterarBancoViajar'])->name('alterar-banco-viajar');
