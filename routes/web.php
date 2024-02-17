<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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


 
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/about', function () {
    return view('about');
});
Route::get('/service-details', function () {
    return view('service-details');
});
 
Route::get('/product', function () {
    return view('product');
});
 
Route::get('/careers', function () {
    return view('careers');
});
Route::get('/datacenter', function () {
    return view('datacenter');
});
Route::get('/security', function () {
    return view('security');
});

Route::get('/network', function () {
    return view('network');
});
Route::get('/enterprise', function () {
    return view('enterprise');
});
 