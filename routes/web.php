<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.main');
});
//login
Route::prefix('auth_login')->group(function () {
    Route::get('/login', 'AuthAdminController@show_login')->name('show_login.index');
    Route::get('/change_pass', 'AuthAdminController@show_change_pass')->name('show_change_pass.index');
    Route::get('/verified_email', 'AuthAdminController@show_verified_email')->name('show_verified_email.index');
    Route::get('/send_email_forgot_pass', 'AuthAdminController@show_send_email_forgot_pass')->name('show_send_email_forgot_pass.index');
});
//Page
Route::prefix('page')->group(function () {
    //Dashboard
    Route::prefix('dashboard')->group(function (){
        Route::get('/default', 'DashboardController@show_default')->name('show_default.index');
        Route::get('/alternative', 'DashboardController@show_alternative')->name('show_alternative.index');
    });
    //User
    Route::prefix('user')->group(function (){
        Route::get('/show_list_user', 'UserController@show_list_user')->name('show_list_user.index');
        Route::get('/add_user', 'UserController@show_add_user')->name('add_user.index');
    });
});


