<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ScheduleController;

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

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])
    ->name('dashboard');

Route::get('login', [CustomAuthController::class, 'index'])
    ->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])
    ->name('login.custom');

Route::get('register', [CustomAuthController::class, 'registration'])
    ->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])
    ->name('register.custom');

Route::get('signout', [CustomAuthController::class, 'signOut'])
    ->name('signout');

//роуты для теста отправки сообщений на почту
Route::get('sendbasicemail',[MailController::class, 'basic_email']);
Route::get('sendhtmlemail',[MailController::class, 'html_email']);
Route::get('sendattachmentemail',[MailController::class, 'attachment_email']);

//страница с расписанием
Route::get('schedule', [ScheduleController::class, 'index'])
    ->name('schedule');

Route::get('main', [\App\Http\Controllers\MainController::class, 'index'])
    ->name('main');


//Admin routes
Route::group(['prefix' => 'admin'], function () {

    Route::get('login', [AdminController::class, 'index'])
        ->name('admin.login');
    Route::post('login', [AdminController::class, 'postLogin'])
        ->name('admin.login.submit');

    Route::get('groups', [GroupController::class, 'adminIndex'])
        ->name('admin.groups.index');
    Route::get('group/{id}', [GroupController::class, 'showGroup'])
        ->name('admin.group.show');

    Route::get('schedule', [ScheduleController::class, 'adminIndex'])
        ->name('admin.schedule.index');

    Route::get('dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::get('logout', [AdminController::class, 'logout'])
        ->name('admin.logout');

    Route::put('/groups/{group}', [GroupController::class, 'update'])
        ->name('group.update');
});
