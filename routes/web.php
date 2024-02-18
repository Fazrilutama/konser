<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\OwnerController;
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
Route::get('/detail/{event}', [HomeController::class, 'detail'])->name('detail');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postRegister', [AuthController::class, 'postRegister'])->name('postRegister');



Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/keranjang', [HomeController::class, 'keranjang'])->name('keranjang');
    Route::post('/postKeranjang/{event}', [HomeController::class, 'postKeranjang'])->name('postKeranjang');

    Route::get('/batalkanpesanan/{detailorder}', [HomeController::class, 'batalkanpesanan'])->name('batalkanpesanan');


    Route::get('/bayar/{detailOrder}', [HomeController::class, 'bayar'])->name('bayar');
    Route::post('/postBayar/{detailOrder}', [HomeController::class, 'postBayar'])->name('postBayar');

    Route::get('/printInvoiceTicket/{id}', [HomeController::class, 'printInvoiceTicket'])->name('printInvoiceTicket');


    // Admin

    Route::get('/admin/events', [AdminController::class, 'events'])->name('admin');
    Route::post('/admin/events/{event}', [AdminController::class, 'updateEventStatus'])->name('events.update-status');
    Route::get('/admin/tambah', [AdminController::class, 'tambah'])->name('tambah');
    Route::post('/admin/postTambah', [AdminController::class, 'postTambah'])->name('admin.postTambah');
    Route::get('/admin/edit/{event}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/admin/postEdit/{event}', [AdminController::class, 'postEdit'])->name('admin.postEdit');
    Route::get('/hapus/{event}', [AdminController::class, 'hapus'])->name('hapus');

    Route::get('/printRiwayatTransaksi', [AdminController::class, 'printRiwayatTransaksi'])->name('printRiwayatTransaksi');


    // Kasir
    Route::get('/admin/orders', [KasirController::class, 'pendingOrders'])->name('orders');
    Route::post('/admin/orders/{detailOrder}/update-status', [KasirController::class, 'updateOrderStatus'])->name('orders.update-status');
    Route::get('/admin/riwayat', [KasirController::class, 'completedRejectedOrders'])->name('riwayat');

    //owner

    Route::get('/owner', [OwnerController::class, 'owner'])->name('owner');
});
