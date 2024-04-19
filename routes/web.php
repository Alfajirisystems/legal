<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
