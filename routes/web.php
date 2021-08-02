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

// Route::get('/', function () {
//     return view('layouts.website');
// });
Route::get('/', 'WebsiteController@index')->name('website');
Route::post('/about-user-information', 'WebsiteController@find_user_information')->name('find_user_information');
Route::get('/user-information', 'WebsiteController@user_information')->name('user_information');
Route::get('/user-payment-information/{registration_number}', 'WebsiteController@user_payment_information')->name('user_payment_information');
Route::post('/user-information-submit', 'WebsiteController@user_information_submit')->name('user_information_submit');
Route::post('/contact-msg', 'WebsiteController@contact_msg')->name('web_contact_msg');

Route::get('/give-payment', 'WebsiteController@payment');

Route::get('/order_success_message',function(){
    dd(request()->all());
})->name('order_success_message');
