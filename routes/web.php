<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
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

Route::get('/',[IndexController::class, 'showIndex'])->name('home');
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/buy',[DashboardController::class, 'buy'])->name('buy');
Route::get('/team',[DashboardController::class, 'team'])->name('team');
Route::get('/business',[DashboardController::class, 'business'])->name('business');
Route::get('/algarve',[DashboardController::class, 'algarve'])->name('algarve');
Route::get('/gaster',[DashboardController::class, 'gastar'])->name('gastar');
Route::post('/gaster',[DashboardController::class, 'gastarStore'])->name('gastar.store');
Route::get('/roadmap',[DashboardController::class, 'roadmap'])->name('roadmap');
Route::post('/roadmap_post',[DashboardController::class, 'roadmapStore'])->name('roadmap.store');
