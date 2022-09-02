<?php

use App\Models\ListingJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingJobController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 2:41:46
*/

//  show all jobs
Route::get('/', [ListingJobController::class,'index'])->name('home');

//  show page form to create a new job
Route::get('/jobs/create', [ListingJobController::class,'create'])->name('create')->middleware('auth');

//  store list job
Route::post('/jobs/store', [ListingJobController::class,'store'])->name('store')->middleware('auth');


//  update job
Route::put('/jobs/{job}', [ListingJobController::class,'update'])->name('update')->middleware('auth');

//  edit job
Route::get('/jobs/{job}/edit', [ListingJobController::class,'edit'])->name('edit')->middleware('auth');

//  delete single job
Route::delete('/jobs/{job}', [ListingJobController::class,'destroy'])->name('delete')->middleware('auth');

// mange jobs
Route::get('/jobs/manage', [ListingJobController::class, 'manage'])->name('manage')->middleware('auth');


//  get single job
Route::get('/jobs/{job}', [ListingJobController::class,'show'])->name('job');


// show form register
Route::get('/register', [UserController::class,'create'])->name('register')->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store'])->name('users');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// // Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
