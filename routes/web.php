<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Contributor\ContributorController;
use App\Http\Controllers\Student\StudentController;

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

Route::get('/', App\Http\Controllers\Admin\UsersController::Class, 'index')->middleware(['auth','verified','locked','admin'])->name('index');
Route::get('/dashboard', App\Http\Controllers\Admin\UsersController::Class, 'index')->middleware(['auth','verified','locked','admin'])->name('dashboard');
Route::get('UserDetails/{user}', [App\Http\Controllers\Admin\UsersController::Class, 'userDetails'])->middleware(['auth','verified','locked','admin'])->name('user-details');

Route::namespace('App\Http\Controllers\Admin')->group(function(){
    Route::resource('users',UsersController::Class)->except(['show','create','store']);
});
Route::Put('/{user}', [App\Http\Controllers\Admin\UsersController::Class, 'lockuser'])->middleware(['auth','verified'])->name('lockuser');
Route::post('/change', [App\Http\Controllers\Admin\UsersController::Class, 'changePassword'])->middleware(['auth','verified'])->name('change_password');
Route::get('/change-password',[App\Http\Controllers\Admin\UsersController::Class, 'gotochangepassword'])->middleware(['auth','verified','locked'])->name('gotochangepassword');
Route::get('/Profile', [App\Http\Controllers\Admin\UsersController::Class, 'profile'])->middleware(['auth','verified','locked'])->name('profile');

/////student
Route::get('student/', App\Http\Controllers\Student\StudentController::Class, 'index')->middleware(['auth','verified','locked','student'])->name('student.index');
/////contributor
Route::get('contributor/', App\Http\Controllers\Contributor\ContributorController::Class, 'index')->middleware(['auth','verified','locked','contributor'])->name('contributor.index');


require __DIR__.'/auth.php';
