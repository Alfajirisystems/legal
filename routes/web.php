<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\CasesController;
use App\Http\Controllers\AttorneysController;
use App\Http\Controllers\LockScreenController;
use App\Http\Controllers\LoginController;

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
/*
dashboard
Appointments
Cases
Case Details
Attorneys
Attorney Details

Email
Chat
Logout
*/
Route::get('/', [HomeController::class, 'index']);

Route::get('/appointments', [AppointmentsController::class, 'index']);

Route::get('/cases', [CasesController::class, 'index']);

Route::get('/attorneys', [AttorneysController::class, 'index']);

Route::get('/lockscreen', [LockScreenController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);