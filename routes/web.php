<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\CasesController;
use App\Http\Controllers\AttorneysController;
use App\Http\Controllers\LockScreenController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourtsController;
use App\Http\Controllers\AttorneyDetailsController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\LettersController;
use App\Http\Controllers\TppdClaimsController;
use App\Http\Controllers\SummonsPlaintsController;
use App\Http\Controllers\Userscontroller;
use App\Http\Controllers\SettlementsController;
use App\Http\Controllers\JudgesController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\FormInputController;
use App\Http\Controllers\StatutoryNoticesController;
use App\Http\Controllers\StatutoryFormInputController;
use App\Http\Controllers\SummonsPlaintsFormInputController;
use App\Http\Controllers\MattersFormInputController;
use App\Http\Controllers\TppdFormInputController;
use App\Http\Controllers\AdvocatesFormInputController;
use App\Http\Controllers\SettlementsFormInputController;
use App\Http\Controllers\JudgesFormInputController;



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
    Route::resource('courts', CourtsController::class);
    Route::resource('appointments', AppointmentsController::class);
    Route::resource('attorneys', AttorneysController::class);
    Route::resource('attorneyDetails', AttorneyDetailsController::class);
    Route::resource('letters', LettersController::class);
    Route::resource('tppdClaims', TppdClaimsController::class);
    Route::resource('summonsPlaints', SummonsPlaintsController::class);
    Route::resource('settlements', SettlementsController::class);
    Route::resource('judges', JudgesController::class);


    Route::get('/statutory_notices', [StatutoryNoticesController::class, 'index']);

    Route::get('/form_statutory', [StatutoryFormInputController::class, 'index']);

    Route::get('/form_matters', [MattersFormInputController::class, 'index']);

    Route::get('/form_advocates', [AdvocatesFormInputController::class, 'index']);

    Route::get('/form_tppd', [TppdFormInputController::class, 'index']);

    Route::get('/form_summons_plaints', [SummonsPlaintsFormInputController::class, 'index']);

    Route::get('/tppd_claims', [TppdClaimsController::class, 'index']);



    Route::get('/form_settlements', [SettlementsFormInputController::class, 'index']);

    Route::get('/form_judges', [JudgesFormInputController::class, 'index']);

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Auth::routes();
