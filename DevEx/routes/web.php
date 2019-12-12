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

Auth::routes();

Route::group(['middleware' => 'verifyUser'], function () {
    //Route::get('edit', ['as' => 'edit', 'uses' => 'AccountController@getEdit']);
    Route::get('/homeland', 'AdminController@index')->name('homeless');
    Route::get('/create','AdminController@add')->name('create');
    Route::get('/list','AdminController@nameList')->name('list');
    Route::get('/edit/{id}','AdminController@update')->name('update');


    Route::get('/product-list','AdminController@prodList')->name('pList');
    Route::get('/edit-product/{id}','AdminController@updateProduct')->name('updateProd');
    Route::post('/edit-product/{id}','AdminController@publishProdUpdate');

    Route::get('/bio/{id}','AdminController@viewBio')->name('bio');
    //Route::post('/bio/{id}','AdminController@loadBio');

   // Route::get('/uploadPix','AdminController@pixUpload')->name('uploadPhoto');
   // Route::post('/uploadPix','AdminController@pixPublish');


   Route::get('/approval-request','AdminController@pixApprove')->name('approvePix');
   Route::get('/approval-request/{id}','AdminController@approved')->name('approved');


   Route::get('/approval-customer','AdminController@customerRequest')->name('cRequest');
   Route::get('/approval-customer/{id}','AdminController@approvedCustomer')->name('approvedCustomer');



    Route::post('/edit/{id}','AdminController@edit');
    Route::post('/create','AdminController@insert');
});


Route::group(['middleware' => 'verifyGuest'], function () {
    
    Route::get('/uploadPix','AdminController@pixUpload')->name('uploadPhoto');
    Route::post('/uploadPix','AdminController@pixPublish');

    

});

Route::group(['middleware' => 'verifyCustomer'], function () {
    
    Route::get('/Customer-Deshboard','AdminController@cusDash')->name('cusDash');

    Route::get('/packge-list','AdminController@pkgList')->name('pkgList');

    Route::post('/packge-list','AdminController@book');

   

});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/portal','LoginController@index')->name('portal');
Route::post('/portal','LoginController@verify');

Route::get('/packge-list','AdminController@pkgList')->name('pkgList');
Route::get('/registration', 'AdminController@reg')->name('registration');
Route::post('/registration','AdminController@regInsert');

