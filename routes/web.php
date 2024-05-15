<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/register', function () {
    return view('admin.register');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
});
Route::get('/produk', function () {
    return view('admin.produk.index');
});
Route::get('/customer', function () {
    return view('admin.customer.index');
});
Route::get('/transaksi', function () {
    return view('admin.transaksi.index');
});
Route::get('/create/transaksi', function () {
    return view('admin.transaksi.create');
});


//pelanggan
Route::get('/pelanggan/dashboard', function () {
    return view('pelanggan.dashboard.index');
});
Route::get('/pelanggan/create/transaksi', function () {
    return view('pelanggan.transaksi.create');
});
Route::get('/pelanggan/transaksi', function () {
    return view('pelanggan.transaksi.index');
});
