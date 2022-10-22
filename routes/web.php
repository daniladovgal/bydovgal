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

Route::middleware('lang')->group(function() {

Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/art', function () {
    return view('include.art.index');
})->name('art');

Route::get('/art/commerce', function () {
    return view('include.art.commerce');
})->name('art/commerce');

Route::get('/art/tfp', function () {
    return view('include.art.tfp');
})->name('art/tfp');

Route::get('/art/video', function () {
    return view('include.art.video');
})->name('art/video');

Route::get('/art/about', function () {
    return view('include.art.about');
})->name('art/about');

Route::get('/art/price', function () {
    return view('include.art.price');
})->name('art/price');

Route::get('/locale/{locale}', 'MainController@Locale')->name('locale');

});