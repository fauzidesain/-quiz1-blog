<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function (){
    Route::get('/', 'DashboardController@index')->name('/');
});
