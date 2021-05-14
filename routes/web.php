<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;

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

Route::get('login' , [UserAuthController::class, 'login']);
Route::get('register' , [UserAuthController::class, 'register']);

Route::post('create' , [UserAuthController::class, 'create'])->name('auth.create');

Route::get('/bible-study-requests', function () {
    return view('bible-study-requests');
});
Route::get('/bible-study-request-form', function () {
    return view('bible-study-request-form');

});
Route::post('check' , [UserAuthController::class, 'check'])->name('auth.check');
Route::get('homepage', [UserAuthController::class, 'homepage']);

Route::post('create2', [UserAuthController::class, 'create2'])->name('auth.create2');

Route::post('check2' , [UserAuthController::class, 'check2'])->name('auth.check2');

Route::get('/thank-you', function () {
    return view('thank-you');
});
Route::get('bible-study-requests', [UserAuthController::class, 'show']);