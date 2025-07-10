<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PainelCadastroController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\MotoboyController;
use App\Http\Controllers\MotoboyRegisterController;
use App\Http\Controllers\PedidoDetalhe;
use App\Http\Controllers\RemeterPedidoController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\PedidoStatusController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/sendsms",[SmsController::class,'index']);
Route::post("/sendsms",[SmsController::class,'sendsms']);


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/


Route::get('painel',[PainelCadastroController::class, 'index'])->name('painel');
Route::post('painel', [PainelCadastroController::class, 'store'])->name('painel.store');

Route::get('painel/{id}', [PainelCadastroController::class, 'show'])->name('painel.show');



Route::get('motoboyzona/{zona}',[PainelCadastroController::class,'motoboyzona' ])->name('motoboyzona');

Route::get('painelpedidos',[PedidosController::class,'index'])->name('pedidos');

Route::post('pedidosupdate/{id}',[PedidosController::class,'update'])->name('pedidos.update');
Route::get('pedidosedit/{id}',[PedidosController::class,'edit'])->name('pedidos.edit');
Route::delete('pedidosdestroy/{id}',[PedidosController::class,'destroy'])->name('pedidos.destroy');
Route::patch('/pedidos/{pedido}/status/{status}', [PedidoStatusController::class, 'update'])->name('pedidos.status.update');
Route::get('detalhepedido/{id}',[PedidoDetalhe::class,'show'])->name('detalhepedido.show');
Route::get('motoboy',[MotoboyController::class,'index' ])->name('motoboy');

Route::get('motoboyregister',[MotoboyRegisterController::class,'index' ])->name('motoboyregister');

Route::post('motoboyregister',[MotoboyRegisterController::class,'store' ])->name('motoboyregister');

Route::get('motoboyedit/{id}',[MotoboyRegisterController::class,'edit' ])->name('motoboy.edit');
Route::post('motoboyupdate/{id}',[MotoboyRegisterController::class,'update' ])->name('motoboy.update');
Route::delete('motoboydestroy/{id}',[MotoboyRegisterController::class,'destroy' ])->name('motoboy.destory');

Route::get('remeter',[RemeterPedidoController::class,'index'])->name('remeter');

Route::post('remeter',[RemeterPedidoController::class,'show'])->name('remeter');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
