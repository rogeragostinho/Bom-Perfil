<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\FaturaController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(SiteController::class)->name('site.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/sobre', 'sobre')->name('sobre');
    Route::get('/carrinho', 'carrinho')->name('carrinho');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/produto/{id}', 'produto')->name('produto');
    Route::get('/produtos&servicos', 'produtos_e_servicos')->name('produtos_e_servicos');
    Route::get('/contato', 'contato')->name('contato');
    Route::get('/servico/{id}', 'servico')->name('servico');
    Route::get('/single-news', 'news')->name('news');
    
});
Route::post('pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::post('/mensagens', [MensagemController::class, 'store'])->name('mensagens.store');

Route::controller(CarrinhoController::class)->prefix('carrinho')->name('carrinho.')->group(function () {
    Route::post('/add', 'add')->name('add');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{id}', 'delete')->name('delete');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('produtos', ProdutoController::class);
    Route::resource('pedidos', PedidoController::class)->except(['store']);
    Route::resource('mensagens', MensagemController::class)->only(['index', 'show', 'destroy']);
    Route::get('/fatura/{id}', [FaturaController::class, 'gerar'])->name('faturas.gerar');
    Route::resource('servicos', ServicoController::class);
    //Usuários
    Route::controller(UserController::class)->name('users.')->prefix('usuarios')->group(function(){Route::get('usuarios', [UserController::class, 'index'])->name('users.index');
        Route::get('/', 'index')->name('index');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });
    
});

Route::controller(AdminController::class)->prefix('admin')->group(function () {
    Route::get('/', 'index')->name('admin.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
