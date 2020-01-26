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

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('admin/users','Admin\UserController',['except'=>['show','create','store']]); //chon resource zadim to href bayad kalame route ro benevisim



Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::get('alluserdatatabels','UserController@alluserdatatabels')->name('users.alluserdatatabels');
    Route::get('index1','UserController@index1')->name('addedextension');

    Route::get('profile', 'ProfileController@profile')->name('profile');
    Route::get('profileV2', 'ProfileController@profile2')->name('profile2');
    Route::get('chartjs', 'ProfileController@charts1')->name('chartjs');


    Route::resource('/users','UserController',['except'=>['show','create','store','update','destroy']]);
   
});

// Route::get('/profile', 'Admin\UserController@profile')->name('admin.profile');


Route::get('/getusers', 'Admin\UserController@index');

Route::get('/editmyuser/{id}', 'Admin\UserController@update');

Route::post('/updated/{id}', 'Admin\UserController@updated');

Route::get('/deletemyuser/{id}', 'Admin\UserController@destroy');



