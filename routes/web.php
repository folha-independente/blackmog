<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ContatoController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/projetos', [ProjetoController::class, 'index'])->name('projetos.index');
Route::get('/projetos/{slug}', [ProjetoController::class, 'show'])->name('projetos.show');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
