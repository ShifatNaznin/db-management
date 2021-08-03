<?php

use App\Models\UserInformation;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::get('/about-user-information', 'WebsiteController@find_user_information')->name('find_user_information');
Route::get('/user-information', 'WebsiteController@user_information')->name('user_information');
Route::get('/user-payment-information/{registration_number}', 'WebsiteController@user_payment_information')->name('user_payment_information');
Route::post('/user-information-submit', 'WebsiteController@user_information_submit')->name('user_information_submit');
Route::post('/contact-msg', 'WebsiteController@contact_msg')->name('web_contact_msg');

Route::get('/give-payment', 'WebsiteController@payment');

Route::get('/order_success_message',function(){


    if(request()->status == 'Failed'){
        // dd(Session::all(),Session::get('user_information')['id'], request()->all());
        return redirect('/about-user-information?registration_number='.Session::get('user_information')['registration_number']);
    }else{
        $data = UserInformation::find(Session::get('user_information')['id']);
        $data->fill(Session::get('user_information'));
        $data->status = 'Paid';
        $data->save();
        return redirect('/about-user-information?registration_number='.Session::get('user_information')['registration_number']);
    }

})->name('order_success_message');
