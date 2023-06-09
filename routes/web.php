<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardcontroller;
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

Route::get('/', [HomeController::class, 'index'] 
);

Route::get('contact', [ContactController::class, 'index'] );
Route::get('contact/create', [ContactController::class, 'create'] );
Route::post('contact/create/', [ContactController::class, 'store']);


Route::get('about', [HomeController::class, 'about'] 
);

Route::get('blog', [HomeController::class, 'blog'] 
);

Route::get('login', [App\Http\Controllers\AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('register', [App\Http\Controllers\AuthController::class, 'store']);
Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);


// DASHBOARD

Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');
Route::get('dashboard/application', [DashboardController::class, 'application'])->middleware('auth');
Route::get('dashboard/shoes', [ShoeController::class, 'index'])->middleware('auth');
Route::get('dashboard/shoes/create', [ShoeController::class, 'create'])->middleware('auth');
Route::post('dashboard/shoes/', [ShoeController::class, 'store'])->middleware('auth');
Route::get('dashboard/shoes/{id}/edit', [ShoeController::class, 'edit'])->middleware('auth');
Route::put('dashboard/shoes/{id}', [ShoeController::class, 'update'])->middleware('auth');
Route::get('dashboard/shoes/{id}/delete', [ShoeController::class, 'delete'])->middleware('auth');
Route::delete('dashboard/shoes/{id}', [ShoeController::class, 'destroy'])->middleware('auth');


