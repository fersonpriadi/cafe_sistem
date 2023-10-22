<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use function Illuminate\Filesystem\name;
use Illuminate\Auth\Events\Login;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'index'])
->name('Login') 
->middleware('guest');


Route::get('/login',[LoginController::class, 'authenticate'])->name('kirim-data-login');
