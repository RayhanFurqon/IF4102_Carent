<?php

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

Route::get('/home', 'HomeController@index');
Route::get('/home/customer','homeCustController@index');
Route::get('/home/owner','homeOwnerController@index');
Route::get('/login','loginController@index');
Route::get('/registrasi','registrasiController@index');
Route::get('/registrasi/owner','registOwnerController@index');
Route::get('/registrasi/customer','registCustController@index');
Route::post('/registrasi/customer/submit','registCustController@submit');
Route::post('/registrasi/owner/submit','registOwnerController@submit');
Route::post('/login/auth','loginController@auth');
Route::get('/logout','loginController@logout');
Route::get('/customer/pesan/{id}','pesanController@getOwner');
Route::post('/pesan/confirm/{id}','pesanController@pesan');
Route::post('/bayar/confirm/{id}','bayarController@bayar');
Route::get('/customer/list-pesanan','listPesanController@index');
Route::post('/customer/lunas/{id}','listPesanController@pelunasan');
Route::get('/customer/checkout','checkoutCustController@index');
Route::get('/customer/profile','profileCustController@index');
Route::post('/customer/changePass','profileCustController@validasi');
Route::post('/customer/changePP','profileCustController@changeFoto');
Route::get('/owner/garasi','garasiController@index');
Route::post('/owner/changeStatus/{id}','garasiController@changestatus');
Route::get('/owner/profile','profileOwnerController@index');
Route::post('/owner/changePass','profileOwnerController@validasi');
Route::post('/owner/changePP','profileOwnerController@changeFoto');
Route::get('/owner/checkout','checkoutOwnerController@index');