<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccomodationController;
use App\Http\Middleware\IsAdmin;

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

// pages only accesible if logged in
Route::middleware(['auth', 'web'])->group(function ()
{
    Route::prefix('/accomodation')->group(function ()
    {
        // show
        Route::get('/', [AccomodationController::class, 'showacco'])->name('showacco');

        Route::get('/create', [AccomodationController::class, 'create'])->name('create');
        Route::post('/create', [AccomodationController::class, 'createPost']);
        // edit
        Route::get('/edit/{Accomodation}', [AccomodationController::class, 'edit'])->name('edit');
        Route::post('/edit/{Accomodation}', [AccomodationController::class, 'update']);
    }); 
});
Route::get('/',[Controller::class, 'index'])->name('index');

// login
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/login', [AuthController::class, 'loginpost']);
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

// signup
Route::get('/auth/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/auth/signup', [AuthController::class, 'signuppost']);

// Admin
Route::middleware(['auth','admin'])->group(function ()
{
    Route::prefix('/admin')->group(function ()
    {
        Route::get('/info', [AdminController::class, 'showInfo'])->name('showInfo');
    });
});

// Profile
Route::middleware(['auth'])->group(function ()
{
    Route::prefix('/profile')->group(function ()
    {
        Route::get('/', [Controller::class, 'profileView'])->name('profileView');
        Route::get('/edit', [Controller::class, 'editView'])->name('editView');
        Route::post('/edit', [Controller::class, 'profileViewPost'])->name('editViewPost');
    });
});