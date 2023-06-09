<?php

use App\Http\Livewire\ArticleForm;
use App\Http\Livewire\Articles;
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

Route::get('/', Articles::class)->name('articles.home');
Route::get('/blog/crear', ArticleForm::class)->name('articles.create');
