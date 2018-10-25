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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/user-add', 'UserController@userForm')->name('user-form');
Route::post('/user-add', 'UserController@userAdd')->name('user-add');
Route::get('/user-list', 'UserController@usersList')->name('user-list');
Route::get('/user/{id}', 'UserController@userInfo')->name('user');
Route::post('/user/{id}', 'UserController@userUpdate')->name('user-update');

Route::get('/user/{id}/events', 'EventController@events')->name('events');
Route::get('/user/event/add', 'EventController@eventAddForm')->name('event-add');
Route::post('/user/event/add', 'EventController@eventAdd')->name('event-add-save');
Route::get('/user/event/edit', 'EventController@eventEditForm')->name('event-edit');
Route::post('/user/event/edit', 'EventController@eventEdit')->name('event-edit-save');
Route::get('/user/event/delete', 'EventController@eventDeleteForm')->name('event-delete');
Route::post('/user/event/delete', 'EventController@eventDelete')->name('event-delete-save');

Route::get('/user/{id}/estate', 'EstateController@estate')->name('estate');
Route::get('/user/estate/add', 'EstateController@estateAddForm')->name('estate-add');
Route::post('/user/estate/add', 'EstateController@estateAdd')->name('estate-add-save');
Route::get('/user/estate/edit', 'EstateController@estateEditForm')->name('estate-edit');
Route::post('/user/estate/edit', 'EstateController@estateEdit')->name('estate-edit-save');
Route::get('/user/estate/delete', 'EstateController@estateDeleteForm')->name('estate-delete');
Route::post('/user/estate/delete', 'EstateController@estateDelete')->name('estate-delete-save');

Route::get('/user/{id}/loans', 'LoansController@loans')->name('loans');
Route::get('/user/loan/add', 'LoansController@loanAddForm')->name('loan-add');
Route::get('/user/obligation/add', 'LoansController@obligationAddForm')->name('obligation-add');
Route::post('/user/loan/add', 'LoansController@loanAdd')->name('loan-add-save');
Route::post('/user/obligation/add', 'LoansController@obligationAdd')->name('obligation-add-save');
Route::get('/user/loan/edit', 'LoansController@loanEditForm')->name('loan-edit');
Route::get('/user/obligation/edit', 'LoansController@obligationEditForm')->name('obligation-edit');
Route::post('/user/loan/edit', 'LoansController@loanEdit')->name('loan-edit-save');
Route::post('/user/obligation/edit', 'LoansController@obligationEdit')->name('obligation-edit-save');
Route::get('/user/loan/delete', 'LoansController@loanDeleteForm')->name('loan-delete');
Route::get('/user/obligation/delete', 'LoansController@obligationDeleteForm')->name('obligation-delete');
Route::post('/user/loan/delete', 'LoansController@loanDelete')->name('loan-delete-save');
Route::post('/user/obligation/delete', 'LoansController@obligationDelete')->name('obligation-delete-save');

Route::get('/calendar', 'CalendrController@index')->name('calendar');
Route::get('/calendar/open', 'CalendrController@open')->name('calendar-open');

Route::get('/event/{id}', 'EventController@event')->name('event');
Route::get('/user/event/edit-date', 'EventController@eventEditDateForm')->name('event-edit-date');
Route::post('/user/event/edit-date', 'EventController@eventEditDate')->name('event-edit-date-save');
Route::get('/user/event/approve', 'EventController@eventApproveForm')->name('event-approve');
Route::post('/user/event/approve', 'EventController@eventApprove')->name('event-approve-save');
