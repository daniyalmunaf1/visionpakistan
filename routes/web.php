<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;

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

Route::get('/', App\Http\Controllers\Admin\UsersController::Class, 'index')->middleware(['auth','verified'])->name('index');

Route::get('/dashboard', App\Http\Controllers\Admin\UsersController::Class, 'index')->middleware(['auth','verified'])->name('dashboard');

Route::namespace('App\Http\Controllers\Admin')->group(function(){
    Route::resource('users',UsersController::Class)->except(['show','create','store']);

});

require __DIR__.'/auth.php';
