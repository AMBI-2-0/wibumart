<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FigurineController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Models\User;
use GuzzleHttp\Middleware;

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

Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

//route dashboard
Route::get('/dashboard',[DashboardController::class, 'index']);

//route figurine
Route::get('/figurine',[FigurineController::class,'index']);

//route cart
Route::get('/cart', [CartController::class, 'index']);

//route login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

//route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


//rout payment
Route::get('/payment', [PaymentController::class, 'index']);

//route crud users
Route::get('/dashboard/users', [UserController::class, 'index'])->middleware('auth'); //list users
Route::get('/dashboard/users/edit/{user:id}', [UserController::class, 'edit'])->middleware('auth');//edit page
Route::put('/dashboard/users/edit/{user:id}', [UserController::class, 'update'])->middleware('auth');//edit user
Route::get('/dashboard/users/create', [UserController::class, 'create'])->middleware('auth'); //create user
Route::post('/dashboard/users/create',[UserController::class,'store'])->middleware('auth');//submit create
Route::delete('/dashboard/users/{user:id}',[UserController::class, 'destroy'])->middleware('auth');//delete user
Route::get('/dashboard/users/{user:id}',[UserController::class,'show'])->middleware('auth'); // single user
