<?php

use Illuminate\Support\Facades\Route;
/* Front-end Controllers */
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ContactController;
/* Back-end Controllers */
use App\Http\Controllers\Backend\IntakeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\UserController;

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
/* Front-end Routes */
// Route::group(['domain' => 'serointech.com'], function () {
	Route::get('/', [HomeController::class, 'index'])->name('home');
// });

/* Back-end Routes */
Route::group(['domain' => 'dash.serointech.com'], function () {

    /* Intake routes */

	Route::get('/intake/request', [IntakeController::class, 'index'])->name('intake');
    Route::post('/intake/request', [IntakeController::class, 'store'])->name('intake.store');
    
    Route::get('/intakes', [IntakeController::class, 'intakes'])->middleware('auth', 'verified', 'role:Administrator|Support')->name('intakes');
    Route::post('/intake/delete/{id}', [IntakeController::class, 'delete'])->middleware('auth', 'verified', 'role:Administrator|Support')->name('intake.delete');
    
    Route::get('/intake/planner/{intake}', [IntakeController::class, 'intakePlanner'])->middleware('auth', 'verified', 'role:Administrator|Support')->name('intake.planner');

    Route::get('/intake/new', [IntakeController::class, 'intakeNew'])->middleware('auth', 'verified', 'role:Administrator|Support')->name('intake.new');
    Route::post('/intake/new', [IntakeController::class, 'storeManual'])->middleware('auth', 'verified', 'role:Administrator|Support')->name('intake.storeManual');

    /* End */

    /* User routes */

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/user/new', [UserController::class, 'create'])->name('users.new');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::post('/user/delete/{id}', [UserController::class, 'delete'])->name('users.delete');

    /* End */

    Route::get('/calendar', [EventController::class, 'index'])->name('calendar');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


});

// Route::view('/mailtest', 'mail.intake-confirm-email');

