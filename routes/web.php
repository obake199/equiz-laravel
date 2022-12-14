<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('sign-in.index');
})->name('login');

Route::get('/register', function () {
    return view('sign-in.register');
})->name('register');


# CONTROLLER ROUTES
Route::post('/postlogin', [LoginController::class, 'loginCheck']);
Route::post('/postregister', [LoginController::class, 'RegisterStudent']);
// Route::get('/logindata', [LoginController::class, 'loginPage']);