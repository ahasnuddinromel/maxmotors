<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.main');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => '/dashboard'], function(){
    Route::get('/bank', 'ViewController@bank')->name('bank');
    Route::get('/employee', 'ViewController@emplyee')->name('employee');
    Route::get('/customer', 'ViewController@customer')->name('customer');
    Route::get('/business/info', 'ViewController@businessInfo')->name('business.info');
    Route::get('/business/setup', 'ViewController@setup')->name('business.setup');
    Route::get('/product/create', 'ViewController@productCreate')->name('product.create');
    Route::get('/product/due', 'ViewController@productDue')->name('product.due');
    Route::get('/product/info', 'ViewController@productInfo')->name('product.info');
    Route::get('/selespoint', 'ViewController@addSelesPoint')->name('selespoint');
    Route::get('/servicepoint', 'ViewController@addServicePoint')->name('servicepoint');
    Route::get('/spearparts', 'ViewController@addSpearParts')->name('spearparts');

});


