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

Route::prefix('lapor')->group(function () {
	Route::get('/all', 'LaporController@all')->name('all_lapor');
	Route::get('/add', 'LaporController@add')->name('add_lapor');
	Route::get('/edit/{id}', 'LaporController@edit')->name('edit_lapor');
	Route::post('/save', 'LaporController@save')->name('save_lapor');
	Route::post('/update', 'LaporController@update')->name('update_lapor');
	Route::get('/delete/{id}', 'LaporController@delete')->name('delete_lapor');
	Route::post('/cari', 'LaporController@cari2')->name('cari_lapor');
});

Route::prefix('admin')->group(function () {
	Route::get('/all', 'AdminController@all');
	Route::get('/add', 'AdminController@add');
	Route::get('/edit/{id}', 'AdminController@edit');
	Route::get('/save', 'AdminController@save');
	Route::get('/update/{id}', 'AdminController@update');
	Route::get('/update_user/{id}', 'AdminController@update_user');
	Route::get('/delete/{id}', 'AdminController@delete');
	Route::get('/delete_lapor/{id}', 'AdminController@delete_lapor');
	Route::get('/index', 'AdminController@index');
});

// Route::get('/{cari}', 'LaporController@cari')->name('cari_lapor');
Route::get('/', 'LaporController@lapor')->name('lapor');

Route::get('/tester', 'LaporController@tester');