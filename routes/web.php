<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PublicController::class, 'index']);
Route::get('/about',[PublicController::class, 'about']);

Route::get('/dashboard/articles',[ArticleController::class, 'index'])->name('articles.index');
Route::get('/dashboard/create',[ArticleController::class, 'create'])->name('articles.create');
Route::post('/dashboard/articles',[ArticleController::class, 'store'])->name('articles.store');
Route::get('/dashboard/delete',[ArticleController::class, 'destroy'])->name('articles.delete');
Route::get('/dashboard/view',[ArticleController::class, 'show'])->name('articles.view');
Route::get('/dashboard/articles/{article}',[ArticleController::class, 'edit'])->name('articles.edit');
Route::post('/dashboard/articles/{article}',[ArticleController::class, 'update'])->name('articles.update');
