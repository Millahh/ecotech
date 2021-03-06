<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ATMController;
use App\Http\Controllers\Controller;
use App\Models\User;


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
    return view('landing-page');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('landing-page');
})->name('landing-page');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

//////////////////////// middleware/////////////////////////////
Route::middleware(['auth'])->group(function () {
    Route::get('/scan', function () {
        return view('scan');
    });
    
    Route::get('/wallet', function () {
        return view('wallet');
    });
    
    Route::get('/test/env', function () {
        dd(env('DB_DATABASE')); // Dump 'db' variable value one by one
    });
    
    
    //////////////ATM ROUTE///////////////////
    Route::get('/atm-signin', function () {
        return view('ATM.signin');
    });
    
    Route::get('/atm-menu', function () {
        return view('ATM.menu');
    })->name('atm-menu');;
    
    Route::get('/atm-qrcode', function () {
        return view('ATM.QRCode');
    });
    
    // Route::get('/atm-menu', function () {
    //     return view('ATM.menuAtm');
    // });
    Route::get('/atm-inputBotol', function () {
        return view('ATM.input-bottle');
    });
    
    // Route::get('/atm-jumlahBotol', function () {
    //     return view('ATM.jmlh-bottle');
    // });

    Route::get('/atm-jumlahBotol', [ATMController::class, 'inputBotol']);

    // Route::get('/atm-succes', function () {
    //     return view('ATM.succes-input');
    // })->name('atm-succes');

    Route::get('/atm-succes', [ATMController::class, 'sendDataSucces']);

    Route::get('/atm-penghasilan', function () {
        return view('ATM.penghasilan');
    });

     Route::get('/atm-earning', function () {
        return view('ATM.earning');
    });

    // Route::post('/atm-earning/{id}', [ATMController::class, 'getPenghasilan']);
    
    // Route::get('/atm-idcard', function () {
    //     return view('ATM.IDCard');
    // });
    
    Route::get('/atm-idcard', 'ATM@idcard');
    
    Route::post('/idcardPost', 'ATM@idcardPost');
    
    Route::get('/wallet', function () {
        return view('wallet');
    });
    
    Route::get('/atm-balance', function () {
        return view('ATM.balance');
    });
    
    Route::get('/atm-idsalah', function () {
        return view('ATM.IDSalah');
    });
    
    Route::get('/atm-idload', function () {
        return view('ATM.IDLoad');
    });
    
    // Route::get('/atm-idcard', function () {
    //     return view('ATM.IDCard');
    // });
    
    Route::get('/atm-idcard', [ATMController::class, 'idcard']);
    
    // Route::post('/idcardPost', [ATMController::class, 'idcardPost']);
    
    Route::post('/idcardPost', [ATMController::class, 'idcardPost']);

    Route::post('getData', [ATMController::class, 'getData'])->name('getData');
    Route::post('viewPage', [ATMController::class, 'viewPage'])->name('viewPage');

});

Route::get('/atm-logout', function () {
    return view('ATM.logoutPage');
});