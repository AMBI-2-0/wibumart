<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClothingController;
use App\Http\Controllers\FigureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PropsController;
use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\OrderController;

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
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('admin');
Route::get('/figure_product', [FigureController::class, 'index']);
Route::get('/clothing', [ClothingController::class, 'index']);
Route::get('/props', [PropsController::class, 'index']);
Route::get('/accessories', [AccessoriesController::class, 'index']);
Route::get('/book', [BookController::class, 'index']);

//filter product admin dashboard product
Route::get('dashboard/products/filter', [ProductController::class,'filter'])->middleware('admin');    

//route detail product [home]
Route::get('order/{id}', [OrderController::class, 'index'])->middleware('auth');

//route cart
Route::get('/cart', [OrderController::class, 'check_out'])->middleware('auth');
Route::post('/cart/{id}', [OrderController::class, 'order'])->middleware('auth');
Route::delete('/cart/{id}', [OrderController::class, 'delete'])->middleware('auth');
Route::get('/confirm-checkout', [OrderController::class, 'confirm'])->middleware('auth');

//route login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication'])->middleware('guest')->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

//route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


//route payment
Route::get('/payment', [PaymentController::class, 'index']);

//route crud users
Route::get('/dashboard/users', [UserController::class, 'index'])->middleware('admin'); //list users
Route::get('/dashboard/users/edit/{user:id}', [UserController::class, 'edit'])->middleware('admin');//edit page
Route::put('/dashboard/users/edit/{user:id}', [UserController::class, 'update'])->middleware('admin');//edit user
Route::get('/dashboard/users/create', [UserController::class, 'create'])->middleware('admin'); //create user
Route::post('/dashboard/users/create',[UserController::class,'store'])->middleware('admin');//submit create
Route::delete('/dashboard/users/{user:id}',[UserController::class, 'destroy'])->middleware('admin');//delete user
Route::get('/dashboard/users/{user:id}',[UserController::class,'show'])->middleware('admin'); // single user


//route history
Route::get('/history', [HistoryController::class, 'index'])->name('history');

//Route CRUD All Product
Route::get('/dashboard/products', [ProductController::class,'index'])->middleware('admin');
Route::get('/dashboard/products/edit/{product:id}', [ProductController::class, 'edit'])->middleware('admin');//edit page
Route::put('/dashboard/products/edit/{product:id}', [ProductController::class, 'update'])->middleware('admin');//edit product
Route::get('/dashboard/products/create', [ProductController::class, 'create'])->middleware('admin'); //create product
Route::post('/dashboard/products/create',[ProductController::class,'store'])->middleware('admin');//submit create
Route::delete('/dashboard/products/{product:id}',[ProductController::class, 'destroy'])->middleware('admin');//delete product
Route::get('/dashboard/products/detail/{product:id}',[ProductController::class,'show'])->middleware('admin'); // single product

