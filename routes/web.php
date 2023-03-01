<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

//главная страница
Route::get('/',[HomeController::class, 'index'])->name('auth');

//группа постов
Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/posts','IndexController')->name('post.index');
    Route::get('/posts/create','CreateController')->name('post.create');
    Route::get('/posts/{post}','ShowController')->name('post.show');
    Route::get('/posts/{post}/edit','EditController')->name('post.edit');

    Route::post('/posts','StoreController')->name('post.store');
    Route::patch('/posts/{post}','UpdateController')->name('post.update');
    Route::delete('/posts/{post}','DestroyController')->name('post.delete');
});

//группа админ панели
Route::middleware('admin')->prefix('admin')->namespace('App\Http\Controllers\Admin\post')->name('admin.')->group(function() {
    Route::get('/post', 'IndexController')->name('post.index');
    Route::get('/post/create','CreateController')->name('post.create');
    Route::get('/posts/{post}','ShowController')->name('post.show');
    Route::get('/posts/{post}/edit','EditController')->name('post.edit');

    Route::post('/posts','StoreController')->name('post.store');
    Route::patch('/posts/{post}','UpdateController')->name('post.update');
    Route::delete('/posts/{post}','DestroyController')->name('post.delete');
});

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
