<?php

use App\Http\Controllers\courseController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\subjectController;
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
