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
    if(Auth::check())
        return redirect('/index');
    else
        return redirect('/login');
});

Auth::routes();

Route::post('/device/location', 'DeviceController@location');
Route::post('/device/id', 'DeviceController@checkDeviceId');
Route::post('/device/notification', 'DeviceController@notification');
Route::post('/update', 'MyProfileController@update')->name('update');
Route::post('/add-child', 'ChildrenController@addNewChild')->name('add-child');
Route::post('/add-existing-child', 'ChildrenController@addExistingChild')->name('add-existing-child');
Route::get('/children','ChildrenController@listChildren');
Route::get('/index', 'HomeController@index')->name('home');
Route::get('/add-child', 'ChildrenController@addChild')->name('add-child');
Route::get('/add-existing-child','ChildrenController@addEChild')->name('add-existing-child');
Route::get('/delete-child', 'ChildrenController@deleteChild')->name('delete-child');
Route::get('/monitor-children', 'ChildrenController@monitorChildren')->name('monitor-children');
Route::get('/children-information', 'ChildrenController@childrenInformation')->name('children-information');
Route::get('/update', 'MyProfileController@updateProfile')->name('update');
Route::get('/notifications', 'NotificationsController@index')->name('notifications');
Route::get('/child/{id}', 'ChildrenController@child');



