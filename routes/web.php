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

Route::get('/', App\Http\Controllers\Admin\UsersController::class, 'index')->name('index');
Route::get('/dashboard', [App\Http\Controllers\Admin\UsersController::class, 'dashboard'])->middleware(['auth','verified','admin'])->name('dashboard');
Route::post('updatedays', [App\Http\Controllers\Admin\UsersController::class, 'updatedays'])->middleware(['auth','verified','admin'])->name('updatedays');
Route::get('deactivatestatus', [App\Http\Controllers\Admin\UsersController::class, 'deactivatestatus'])->middleware(['auth','verified','admin'])->name('deactivatestatus');
Route::post('updatebankdetails', [App\Http\Controllers\Admin\UsersController::class, 'updatebankdetails'])->middleware(['auth','verified','admin'])->name('updatebankdetails');
Route::get('/usermanagement', [App\Http\Controllers\Admin\UsersController::class, 'usermanagement'])->middleware(['auth','verified','admin'])->name('usermanagement');
Route::get('/pinrequest', [App\Http\Controllers\Admin\UsersController::class, 'pinrequest'])->middleware(['auth','verified','admin'])->name('pinrequest');
Route::post('sendpin/{id}/{user_id}/{trx_id}/{plan}', [App\Http\Controllers\Admin\UsersController::class, 'sendpin'])->middleware(['auth','verified','admin'])->name('sendpin');
Route::get('/withdrawalrequest', [App\Http\Controllers\Admin\UsersController::class, 'withdrawalrequest'])->middleware(['auth','verified','admin'])->name('withdrawalrequest');
Route::get('withdrawdone/{id}/{user_id}/{plan}', [App\Http\Controllers\Admin\UsersController::class, 'withdrawdone'])->middleware(['auth','verified','admin'])->name('withdrawdone');
Route::get('/teambonusrequest', [App\Http\Controllers\Admin\UsersController::class, 'teambonusrequest'])->middleware(['auth','verified','admin'])->name('teambonusrequest');
Route::get('bonusdone/{id}/{user_id}/{plan}', [App\Http\Controllers\Admin\UsersController::class, 'bonusdone'])->middleware(['auth','verified','admin'])->name('bonusdone');
Route::get('/rewardrequest', [App\Http\Controllers\Admin\UsersController::class, 'rewardrequest'])->middleware(['auth','verified','admin'])->name('rewardrequest');
Route::get('rewarddone/{id}/{user_id}/{reward}/{plan}', [App\Http\Controllers\Admin\UsersController::class, 'rewarddone'])->middleware(['auth','verified','admin'])->name('rewarddone');
Route::get('/{user}', [App\Http\Controllers\Admin\UsersController::class, 'deactivateuser'])->middleware(['auth','verified'])->name('deactivateuser');


Route::post('register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])->middleware(['auth','verified'])->name('register');;

Route::get('user/dashboard', [App\Http\Controllers\User\UsersController::class, 'dashboard'])->middleware(['auth','Deactivate','verified'])->name('user.dashboard');
Route::get('user/plan', [App\Http\Controllers\User\UsersController::class, 'plan'])->middleware(['auth','Deactivate','verified'])->name('user.plan');
Route::get('user/viewpin', [App\Http\Controllers\User\UsersController::class, 'viewpin'])->middleware(['auth','Deactivate','verified'])->name('user.viewpin');
Route::get('user/pinrequest', [App\Http\Controllers\User\UsersController::class, 'pinrequest'])->middleware(['auth','Deactivate','verified'])->name('user.pinrequest');
Route::post('user/pinrequeststore', [App\Http\Controllers\User\UsersController::class, 'pinrequeststore'])->middleware(['auth','Deactivate','verified'])->name('user.pinrequeststore');
Route::get('user/treeview', [App\Http\Controllers\User\UsersController::class, 'treeview'])->middleware(['auth','Deactivate','verified'])->name('user.treeview');
Route::get('user/submit/{id}', [App\Http\Controllers\User\UsersController::class, 'submit'])->middleware(['auth','Deactivate','verified'])->name('user.submit');
Route::get('user/submitreward', [App\Http\Controllers\User\UsersController::class, 'submitreward'])->middleware(['auth','verified'])->name('user.submitreward');
Route::get('user/submitteambonus/{id}', [App\Http\Controllers\User\UsersController::class, 'submitteambonus'])->middleware(['auth','Deactivate','verified'])->name('user.submitteambonus');
Route::get('user/treeviewgold', [App\Http\Controllers\User\UsersController::class, 'treeviewgold'])->middleware(['auth','Deactivate','verified'])->name('user.treeviewgold');
Route::get('user/adduser', [App\Http\Controllers\User\UsersController::class, 'adduser'])->middleware(['auth','Deactivate','verified'])->name('user.adduser');
Route::get('user/addusergold', [App\Http\Controllers\User\UsersController::class, 'addusergold'])->middleware(['auth','Deactivate','verified'])->name('user.addusergold');
Route::get('user/changeplan', [App\Http\Controllers\User\UsersController::class, 'changeplan'])->middleware(['auth','Deactivate','verified'])->name('user.changeplan');
Route::get('user/paymenthistory', [App\Http\Controllers\User\UsersController::class, 'paymenthistory'])->middleware(['auth','Deactivate','verified'])->name('user.paymenthistory');
Route::get('user/deactivate', [App\Http\Controllers\User\UsersController::class, 'deactivate'])->name('user.deactivate');
Route::get('user/planchange', [App\Http\Controllers\User\UsersController::class, 'planchange'])->middleware(['auth','Deactivate','verified'])->name('user.planchange');




// Route::get('UserDetails/{user}', [App\Http\Controllers\Admin\UsersController::class, 'userDetails'])->middleware(['auth','verified','locked','admin'])->name('user-details');

Route::namespace('App\Http\Controllers\Admin')->group(function(){
    Route::resource('users',UsersController::class)->except(['show','create','store']);
});
Route::post('user/change', [App\Http\Controllers\Admin\UsersController::class, 'changePassword'])->middleware(['auth','verified'])->name('change_password');
Route::get('user/change-password',[App\Http\Controllers\Admin\UsersController::class, 'gotochangepassword'])->middleware(['auth','verified'])->name('gotochangepassword');
// Route::get('/Profile', [App\Http\Controllers\Admin\UsersController::class, 'profile'])->middleware(['auth','verified','locked'])->name('profile');

// /////student
// Route::get('student/', App\Http\Controllers\Student\StudentController::class, 'index')->middleware(['auth','verified','locked'])->name('student.index');
// /////contributor
// Route::get('contributor/', App\Http\Controllers\Contributor\ContributorController::class, 'index')->middleware(['auth','verified','locked','contributor'])->name('contributor.index');

Route::get('/mig', function () {
    Artisan::call("migrate");
});
Route::get('/dbsd', function () {
    Artisan::call("db:seed");
});
Route::get('/dbwp', function () {
    Artisan::call("db:wipe");
});

Route::get('/cc', function () {
    Artisan::call("cache:clear");
});


require __DIR__.'/auth.php';
