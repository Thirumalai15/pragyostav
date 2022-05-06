<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [FrontendController::class,'index'])->name('index');

Route::get('/event-registration',[FrontendController::class,'register_for_event'])->name('eventReg');
Route::post('/event-registration-store',[TeamController::class,'store'])->name('store.registration');
Route::get('/event-registration-successful/{team_update}',[TeamController::class,'registration_successful'])->name('registration.successful');
Route::post('/contact-us',[FrontendController::class,'contact_us'])->name('contact');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth')->name('dashboard');
Route::post('/change-status/{reg_id}',[DashboardController::class,'change_status'])->middleware('auth')->name('change_status');
Route::get('/export-data',[DashboardController::class,'export'])->middleware('auth')->name('export');

