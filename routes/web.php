<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AuthController;
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

Route::get('/sub', [SubjectController::class, 'index']);


Route::group(['prefix' => 'user', 'middleware' => 'isRegistered'],function (){
    Route::get('/register', function (){
        return view('auth.register');
    });
    Route::get('/login', function (){
        return view('auth.login');
    })->name('login');
    Route::get('/forgot', function (){
        return view('auth.forgotPassword');
    })->name('forgot');
    Route::post('register', [AuthController::class, 'register'])->name('user.register');
    Route::post('login', [AuthController::class, 'login'])->name('user.login');

    Route::post('/forgot', [AuthController::class, 'forgotPassword'])->name('forgot.password');
    Route::post('/forgot/sms', [AuthController::class, 'sendSms'])->name('sendSms');
});

Route::get('/user/logout', function (){
    auth()->logout();
    return view('auth.login');
})->middleware('auth');
Route::get('user/admin', function (){
    return view('layouts.admin');
})->middleware('auth');
