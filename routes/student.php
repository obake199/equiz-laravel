<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Student\StudentController;
use App\Models\Student;
use App\Models\StudentClass;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'student'], function () {
    Route::get('/{any}', [StudentController::class, 'index'])->where('any', '[A-Za-z]+');

    Route::group(['prefix' => 'api'], function () {
        Route::get('/data', [StudentController::class, 'data']);
        Route::get('/logout', [StudentController::class, 'logout']);
    });
});