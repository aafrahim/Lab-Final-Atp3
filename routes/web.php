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

Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::post('/registration', 'RegistrationController@store');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/userlist', 'AdminController@userlist')->name('admin.userlist');
Route::get('/user/delete/{id}', 'AdminController@delete')->name('user.delete');
Route::get('/profile/{id}', 'AdminController@profileView')->name('admin.profileView');

Route::get('/addCar', 'CarController@add')->name('car.add');
Route::post('/addCar', 'CarController@store');
Route::get('/carlist', 'CarController@carlist')->name('car.carlist');
Route::get('/car/delete/{id}', 'CarController@delete')->name('car.delete');


Route::get('/logout', 'LogoutController@index')->name('logout.index');
