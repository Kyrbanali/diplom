<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('welcome');
});
//роуты для теста отправки сообщений на почту
Route::get('sendbasicemail',[MailController::class, 'basic_email']);
Route::get('sendhtmlemail',[MailController::class, 'html_email']);
Route::get('sendattachmentemail',[MailController::class, 'attachment_email']);

//страница с расписанием
Route::get('schedule', [\App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule');

Route::get('main', [\App\Http\Controllers\MainController::class, 'index'])->name('main');


//Admin routes
Route::get('admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'postLogin'])->name('admin.login.submit');
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('signout', [AdminController::class, 'signOut'])->name('signout');
