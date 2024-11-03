<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UsuarioController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;


Route::get('/bienvenida', function () {
    return view('welcome');
});

Route::get('/usuarios',[UsuarioController::class,'index']);
Route::get('/crear-usuarios', [UsuarioController::class, 'create']);
Route::post('/crear-usuarios', [UsuarioController::class, 'store']);

Route::get('/articles',[ArticleController::class, 'index'])->name('articles.index');
Route::get('/create-articles',[ArticleController::class, 'create'])->name('articles.create');
Route::post('/create-articles',[ArticleController::class, 'store'])->name('articles.store');

Route::get('/contact',[ContactController::class, 'index'])->name('contact.index');
Route::get('/create-contact',[ContactController::class, 'create'])->name('contact.create');
Route::post('/create-contact',[ContactController::class, 'store'])->name('contact.store');
