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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/agwadmin', function () {
    return view('auth.login');
});

Route::get('/products', 'WebsiteController@products');

Route::post('/searchProduct', 'WebsiteController@searchProduct');

Route::get('/repairs', 'WebsiteController@repairs');

Route::get('/unlock', 'WebsiteController@unlock');

Route::get('/buySellTrade', 'WebsiteController@buySellTrade');

Route::get('/warranty', 'WebsiteController@warranty');

Route::get('/shopsLocator', 'WebsiteController@shopsLocator');

Route::get('/getAQuote', 'WebsiteController@getAQuote');

Route::get('/productDetails/{id}', 'WebsiteController@productDetails');

Route::post('/submitQuote', 'WebsiteController@submitQuote');

//--------------------------------------------------------------------------

//Route::get('/admin', function () {
//    return view('adminDashboard');
//});

Route::post('/addProduct', 'AdminController@addProduct');

Route::get('/editProduct/{id}', 'AdminController@editProduct');

Route::post('/updateProduct', 'AdminController@updateProduct');

Route::get('/manageProducts', 'AdminController@manageProducts');

Route::get('/adminProductDetails/{id}', 'AdminController@adminProductDetails');

Route::get('/quotationMessage/{id}', 'AdminController@quotationMessage');

Route::get('/quotationMessages', 'AdminController@quotationMessages');

Route::get('/deleteMassage', 'AdminController@deleteMassage');

Route::get('/deleteProduct', 'AdminController@deleteProduct');

Route::get('/btnDeleteProduct', 'AdminController@btnDeleteProduct');

Route::get('/btnDeleteMassage', 'AdminController@btnDeleteMassage');

Route::get('/adminLogin', 'AdminController@adminLogin');

Route::get('/changePassword', 'AdminController@changePassword');

Route::post('/updatePassword', 'AdminController@updatePassword');


//-----------------------------------------------------------------------

Route::get('/sendMail','AdminController@sendMail');