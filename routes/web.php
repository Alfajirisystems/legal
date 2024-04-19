<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\CasesController;
use App\Http\Controllers\AttorneysController;
use App\Http\Controllers\LockScreenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AttorneyDetailsController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\LettersController;
use App\Http\Controllers\SummonsPlaintsController;
use App\Http\Controllers\Userscontroller;
use App\Http\Controllers\BranchesController;

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

Route::get('/attorney_details', [AttorneyDetailsController::class, 'index']);

Route::get('/mailbox', [MailboxController::class, 'index']);

Route::get('/letters', [LettersController::class, 'index']);

Route::get('/summons_plaints', [SummonsPlaintsController::class, 'index']);
Auth::routes();
Route::get('/', [HomeController::class, 'index']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('profile.edit');

    Route::resource('users', Userscontroller::class);
    Route::resource('branches', BranchesController::class);
    // Route::get('/branches', [BranchesController::class, 'index'])->name('admin.branches.index');
    // Route::get('/branches/create', [BranchesController::class, 'create'])->name('admin.branches.create');
    // Route::post('/branches', [BranchesController::class, 'store'])->name('admin.branches.store');

    
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
