<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/my_article', [ArticleController::class, 'showMyArticles'])->name('my_article');
Route::get('/home/cr_article', [ArticleController::class, 'createForm'])->name('cr_article');
Route::get('/home/cr_category', [CategoryController::class, 'createForm'])->name('cr_category');

Route::get('/home/cr_article/{id}', [ArticleController::class, 'updateForm'])->name('up_article');
Route::get('/home/cr_category/{id}', [CategoryController::class, 'updateForm'])->name('up_category');

Route::resources([
    'articles' => ArticleController::class,
    'categories' => CategoryController::class,
]);
