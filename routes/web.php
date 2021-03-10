<?php

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
Route::get('/dash', function () {return view('dashboard/welcome');})->name('dash_welcome_path');
Route::get('/dash/addPersonal', function () {return view('dashboard/addPersonal');})->name('dash_add_personal_path');
Route::get('/dash/payment', function () {return view('dashboard/payment');})->name('dash_payment_path');
Route::get('/dash/register', function () {return view('dashboard/register');})->name('dash_register_path');
