<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\SawController;
use App\Http\Controllers\RangkingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
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
    return view('dashboard');
})->middleware('auth');
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);
Route::get('/category/checkSlug', [CategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/nilai', NilaiController::class)->except('show','edit','update','destroy')->middleware('admin');
Route::resource('/category', CategoryController::class)->except('show')->middleware('admin');
Route::get('/saw', [SawController::class,'index'])->middleware('auth');
Route::get('/normalisasi', [NormalisasiController::class,'index'])->middleware('auth');
Route::resource('/pegawai', PegawaiController::class)->except('show','update','destroy')->middleware('admin');
Route::resource('/rangking', RangkingController::class)->except('create','edit','update','destroy')->middleware('auth');