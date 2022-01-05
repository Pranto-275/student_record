<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\subjectController;
<<<<<<< HEAD
=======
use App\Http\Controllers\viewstudentController;
>>>>>>> adminpanel
use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('dashobard');
});

//course manage
Route::get('/course', [courseController::class, 'index']);
Route::resource('course', courseController::class);
Route::get('/showcourse', [courseController::class, 'showcourse'])->name('allcourse');
//end course manage


//subject manage
Route::resource('subject', subjectController::class);
//end subjectmanage


//registration student manage
Route::get('/reg', [registrationController::class, 'viewregform'])->name('reg.student');

Route::post('/regstore', [registrationController::class, 'register'])->name('reg.form');
=======

//login info
Route::post('/auth/check', [authController::class, 'userlogin'])->name('auth.check');


//logout

Route::get('/auth/logout', [authController::class, 'logout'])->name('logout');



//middleware
Route::middleware('AuthCheck')->group(function () {

    Route::get('/login', [authController::class, 'login'])->name('login');

    Route::get('/dashboard', function () {
        return view('dashobard');
    })->name('dashboard');

    //course manage
    Route::get('/course', [courseController::class, 'index']);
    Route::resource('course', courseController::class);
    Route::get('/showcourse', [courseController::class, 'showcourse'])->name('allcourse');
    //end course manage


    //subject manage
    Route::resource('subject', subjectController::class);
    //end subjectmanage


    //registration student manage
    Route::get('/reg', [registrationController::class, 'viewregform'])->name('reg.student');
    Route::post('/regstore', [registrationController::class, 'register'])->name('reg.form');


    //view student
    Route::resource('student', viewstudentController::class);
});
>>>>>>> adminpanel
