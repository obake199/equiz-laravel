<?php

use App\Http\Controllers\LoginController;
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
});

Route::get('/login', function () {
    # testing
    # datadumping();
    return view('sign-in.index');
});

Route::post('/loginCred', [LoginController::class, 'loginCheck']);
Route::post('/registerAdmin', [LoginController::class, 'RegisterAdmin']);
Route::get('/logindata', [LoginController::class, 'loginPage']);
