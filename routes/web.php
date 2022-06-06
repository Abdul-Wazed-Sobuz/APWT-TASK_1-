<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\serviceController;
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

Route::get('/',[pageController::class,'home'])->name('Home');

Route::get('/service',[serviceController::class,'service'])->name('Service');

Route::get('/teams',[pageController::class,'teams'])->name('Teams');

Route::get('/aboutus',[pageController::class,'aboutus'])->name('Aboutus');

Route::get('/contact',[pageController::class,'contact'])->name('Contactus');

Route::get('/create',[pageController::class,'create'])->name('Create');

Route::post('/create',[pageController::class,'createSubmit'])->name('CreateSubmit');

Route::get('/productitem',[pageController::class,'productitem'])->name('Productitem');





