<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
