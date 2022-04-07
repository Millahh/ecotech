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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// Route::get('/scan','App\Http\Controllers\Scan@scanSR');
Route::get('/scan', function () {
    return view('scan');
});

Route::get('/atm-menu', function () {
    return view('ATM.menu');
});

Route::get('/atm-qrcode', function () {
    return view('ATM.QRCode');
});

Route::get('/atm-idcard', function () {
    return view('ATM.IDCard');
});

Route::get('/wallet', function () {
    return view('wallet');
});

Route::get('/tes', function () {
    return view('tes');
});