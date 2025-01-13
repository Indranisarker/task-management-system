<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EmployeeStatus;
use App\Http\Middleware\RoleCheck;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'home'])->name('/');
// Route::get('/', [HomeController::class, 'home'])->middleware(RoleCheck::class);
// Route::get('/login', [HomeController::class, 'showLoginPage']);
Route::get('/login', [HomeController::class, 'showLoginPage'])->middleware([RoleCheck::class,EmployeeStatus::class]);
Route::get('/sign-up', [HomeController::class, 'showSignUpPage']);
Route::post('/add-user', [UserController::class, 'addUser']);

//named route
Route::get('/home/about-us', [HomeController::class, 'about']);

//add route group with prefix
// Route::prefix('manager')->group(function(){
//     Route::view('show-home','home');
// });

//route grouping with controller
// Route::controller(HomeController::class)->group(function(){
//     Route::get('/', 'home');
//     Route::get('/login', 'showLoginPage');
//     Route::get('/sign-up', 'showSignUpPage');
// });
