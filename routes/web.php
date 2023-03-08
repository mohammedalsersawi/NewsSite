<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Post\PostController;

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


Route::middleware('auth')->get('/', function () {
    return view('admin.page.post.index');
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
    Route::controller(PostController::class)->name('post.')->prefix('post')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::delete('delete/{id}', 'destroy')->name('delete');
        Route::get('/getData', 'getData')->name('getData');
        Route::put('/activate/{id}', 'activate')->name('activate');
        Route::put('/activate/main/{id}', 'activate_main')->name('activate.main');
        Route::post('/progress', 'progress')->name('progress');
    });
});
