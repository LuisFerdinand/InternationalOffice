<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShortCourseController;
use App\Http\Controllers\StudentExchangeController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['title'=> 'About']);
});

Route::get('/shortcourses', [ShortCourseController::class, 'index'])->name('shortcourses.index');
Route::get('/shortcourse/{slug}', [ShortCourseController::class, 'show'])->name('shortcourses.show');
Route::get('/shortcourses/create', [ShortCourseController::class, 'create'])->name('short-courses.create');
Route::post('/shortcourses', [ShortCourseController::class, 'store'])->name('short-courses.store');


Route::get('/studentexchanges', [StudentExchangeController::class, 'index']);
Route::get('/studentexchange/{slug}', [StudentExchangeController::class, 'show']);
Route::get('/studentexchanges/create', [StudentExchangeController::class, 'create'])->name('studentexchanges.create');
Route::post('/studentexchanges', [StudentExchangeController::class, 'store'])->name('student-exchanges.store');

// Register Admin
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Login & Logout function
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Reset Password
Route::get('/password/reset', [AuthController::class, 'showResetPassword'])->name('password.request');
Route::get('/password/reset_form/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/password/email', [AuthController::class, 'sendResetPasswordEmail'])->name('password.email');
Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('password.update');

// Dashboard
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/user/{user}/update-role', [UserController::class, 'updateRole'])->name('user.update-role');
});
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// CRUD for Short Course
Route::resource('courses', CourseController::class);
// CRUD for Student Exchanges
Route::resource('exchanges', ExchangeController::class);
// Route::get('/exchanges', [ExchangeController::class, 'index'])->name('exchanges.index');
// Route::get('/exchanges/create', [ExchangeController::class, 'create'])->name('exchanges.create');
// Route::post('/exchanges', [ExchangeController::class, 'store'])->name('exchanges.store');
// Route::get('/exchanges/{slug}', [ExchangeController::class, 'show'])->name('exchanges.show');
// Route::get('/exchanges/{slug}/edit', [ExchangeController::class, 'edit'])->name('exchanges.edit');
// Route::put('/exchanges/{slug}', [ExchangeController::class, 'update'])->name('exchanges.update');
// Route::delete('/exchanges/{slug}', [ExchangeController::class, 'destroy'])->name('exchanges.destroy');

