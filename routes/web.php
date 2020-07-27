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

Route::Auth();

Auth::routes(['verify' => true]);

Route::get('/',function(){
    return view('auth.login');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard','HomeController@index')->name('dashboard');

Route::get('/facebook/interest','FacebookController@facebookInterest')->name('facebook_interest');

Route::get('/facebook/token','FacebookController@token')->name('facebook_token');

Route::post('/facebook/token/update','FacebookController@updateToken');

Route::get('/users','UserController@index')->name('users_list');

Route::get('/user/create','UserController@create')->name('user_create');

Route::post('/user/store','UserController@store');

Route::get('/user/edit/{id}','UserController@edit')->name('user_edit');

Route::post('/user/update/{id}','UserController@update');

Route::get('/profile','UserController@profile');

Route::post('/profile/update','UserController@updateProfile');



/* === Cache === */
Route::get('/clear', function () {
            
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    
    return "Cleared!";
    
});
