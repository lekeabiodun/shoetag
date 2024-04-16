<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
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

Route::get('/', [HomeController::class, 'index'] );

Route::get('contact', [ContactController::class, 'index'] );
Route::get('contact/create', [ContactController::class, 'create'] );
Route::post('contact/create/', [ContactController::class, 'store']);

Route::get('about', [HomeController::class, 'about'] );

Route::get('blog', [BlogController::class, 'index'] );
Route::get('blog/create', [BlogController::class, 'create'] );
Route::post('blog/create/', [BlogController::class, 'store'] );

Route::get('login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'store']);
// Route::get('dashboard/users', [AuthController::class, 'users']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('forgot_password', [AuthController::class, 'forgottenpassword']);


// DASHBOARD

Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');
Route::get('dashboard/users', [DashboardController::class, 'users'])->middleware('auth');
Route::get('dashboard/shoes', [ShoeController::class, 'index'])->middleware('auth');
Route::get('dashboard/shoes/create', [ShoeController::class, 'create'])->middleware('auth');
Route::post('dashboard/shoes/', [ShoeController::class, 'store'])->middleware('auth');
Route::get('dashboard/shoes/{id}/edit', [ShoeController::class, 'edit'])->middleware('auth');
Route::put('dashboard/shoes/{id}', [ShoeController::class, 'update'])->middleware('auth');
Route::get('dashboard/shoes/{id}/delete', [ShoeController::class, 'delete'])->middleware('auth');
Route::delete('dashboard/shoes/{id}', [ShoeController::class, 'destroy'])->middleware('auth');


