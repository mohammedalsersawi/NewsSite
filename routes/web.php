<?php

use App\Http\Controllers\Admin\breakingNews\BreakingNewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Content\ContentController;
use App\Http\Controllers\Admin\news\NewsController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Front\MainController;
use App\Models\Content;

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


Route::get('/cccc', function () {
    return view('front.layouts.app');
});

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {

    Route::controller(CategoryController::class)->name('category.')->prefix('category')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::delete('delete/{id}', 'destroy')->name('delete');
        Route::get('/getData', 'getData')->name('getData');
        Route::put('/activate/{id}', 'activate')->name('activate');
    });
    Route::controller(NewsController::class)->name('post.')->prefix('post')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::delete('delete/{id}', 'destroy')->name('delete');
        Route::get('/getData', 'getData')->name('getData');
        Route::put('/activate/{id}', 'activate')->name('activate');
        Route::put('/activate/main/{id}', 'activate_main')->name('activate.main');
        Route::post('/progress', 'progress')->name('progress');
    });
    Route::controller(BreakingNewsController::class)->name('breaking.news.')->prefix('breaking/news')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::delete('delete/{id}', 'destroy')->name('delete');
        Route::get('/getData', 'getData')->name('getData');
        Route::put('/activate/{id}', 'activate')->name('activate');
    });
    Route::controller(ContentController::class)->name('contents.')->prefix('contents')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::delete('delete/{id}', 'destroy')->name('delete');
        Route::get('/getData', 'getData')->name('getData');
        Route::put('/activate/{id}', 'activate')->name('activate');
    });
});


Route::group([
], function () {

    Route::controller(MainController::class)->name('main.page.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('category/{slug}/{id}', 'show')->name('show');
        Route::get('/show/categories', 'showCategories')->name('categories');
        Route::get('/show/{slug}/{id}', 'showNewss')->name('newss');
        Route::get('/load/newss/{id}', 'loadnewss')->name('loadnewss');

    });
});
