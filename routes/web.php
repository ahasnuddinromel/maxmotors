<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;



Route::get('/dashboard', function () {
    return view('dashboard.main');
})->middleware('auth')->name('dashboard');



Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => '/dashboard', 'middleware' => 'auth'], function(){
    Route::get('/bank', [ViewController::class, 'bank'])->name('bank');
    Route::get('/bank/setup', [ViewController::class, 'bankSetup'])->name('bank.setup');
    Route::get('/employee', [ViewController::class, 'emplyee'])->name('employee');
    Route::get('/cust omer', [ViewController::class, 'customer'])->name('customer');
    Route::get('/business/info', [ViewController::class, 'businessInfo'])->name('business.info');
    Route::get('/info/setup', [ViewController::class, 'setupInfo'])->name('setup.info');
    Route::get('/business/setup', [ViewController::class, 'setup'])->name('business.setup');
    Route::get('/product/create', [ViewController::class, 'productCreate'])->name('product.create');
    Route::get('/product/due', [ViewController::class, 'productDue'])->name('product.due');
    Route::get('/product/info', [ViewController::class, 'productInfo'])->name('product.info');
    Route::get('/selespoint', [ViewController::class, 'addSelesPoint'])->name('selespoint');
    Route::get('/servicepoint', [ViewController::class, 'addServicePoint'])->name('servicepoint');
    Route::get('/spearparts', [ViewController::class, 'addSpearParts'])->name('spearparts');
    Route::get('/invoice', [ViewController::class, 'customerInvoice'])->name('invoice');

});

require __DIR__.'/auth.php';
