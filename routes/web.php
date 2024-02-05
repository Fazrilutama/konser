<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KasirController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/adminHome', [AdminController::class, 'admin'])->name('admin');
Route::get('/detail/{event}', [HomeController::class, 'detail'])->name('detail');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postRegister', [AuthController::class, 'postRegister'])->name('postRegister');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/keranjang', [HomeController::class, 'keranjang'])->name('keranjang');
Route::post('/postKeranjang/{event}', [HomeController::class, 'postKeranjang'])->name('postKeranjang');

Route::get('/bayar/{detailOrder}', [HomeController::class, 'bayar'])->name('bayar');
Route::post('/postBayar/{detailOrder}', [HomeController::class, 'postBayar'])->name('postBayar');


// Admin

Route::get('/admin/events', [AdminController::class, 'events'])->name('admin');
Route::post('/admin/events/{event}', [AdminController::class, 'updateEventStatus'])->name('events.update-status');
Route::get('/admin/tambah', [AdminController::class, 'tambah'])->name('tambah');
Route::post('/admin/postTambah', [AdminController::class, 'postTambah'])->name('admin.postTambah');

// Kasir
Route::get('/kasir/events/{event}', [KasirController::class, 'events'])->name('event');


