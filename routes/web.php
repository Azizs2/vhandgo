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

Route::get('/', function () {return view('welcome');});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('setlocale/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang']);
Route::get('/profile', function () {return view('admin/profile');});
Route::get('/mulai_bisnis', function () {return view('admin/mulai_bisnis');});
Route::get('/daftar_bisnis', function () {return view('admin/daftar_bisnis');});
Route::get('/welcome', function () {return view('welcome');});
Route::get('/register_bisnis', function () {return view('auth/register_bisnis');});
Route::get('/ketentuan_pengguna', function () {return view('admin/ketentuan_pengguna');});
Route::get('/ketentuan_privasi', function () {return view('admin/ketentuan_privasi');});
// Route::get('/supports', [App\Http\Controllers\SupportController::class, 'index']);
// Route::get('/supports/create', [App\Http\Controllers\SupportController::class, 'create']);
// Route::post('/supports', [App\Http\Controllers\SupportController::class, 'store']);
// Route::get('/supports/{support}/edit', [App\Http\Controllers\SupportController::class, 'edit']);
// Route::put('/supports/{support}', [App\Http\Controllers\SupportController::class, 'update']);
// Route::delete('/supports/{support}', [App\Http\Controllers\SupportController::class, 'destroy']);

Route::resource('/admins', App\Http\Controllers\AdminController::class);
Route::resource('/donations', App\Http\Controllers\DonationController::class);
Route::resource('/efforts', App\Http\Controllers\EffortController::class);
Route::resource('/investasis', App\Http\Controllers\InvestasiController::class);
Route::resource('/supports', App\Http\Controllers\SupportController::class);
Route::resource('/transactions', App\Http\Controllers\TransactionController::class);

Route::get('/api/admins', [App\Http\Controllers\AdminController::class, 'api']);
Route::get('/api/donations', [App\Http\Controllers\DonationController::class, 'api']);
Route::get('/api/efforts', [App\Http\Controllers\EffortController::class, 'api']);
Route::get('/api/investasis', [App\Http\Controllers\InvestasiController::class, 'api']);
Route::get('/api/supports', [App\Http\Controllers\SupportController::class, 'api']);
Route::get('/api/transactions', [App\Http\Controllers\TransactionController::class, 'api']);

