<?php

#Author : Rizal Ihwan Sulaiman
#Facebook : Rizal Ihwan
#github : rizalihwan
#telegram : @ihw_me

use Illuminate\Support\Facades\Route;
// user access
Route::get('/', 'User\UserController@home')->name('home');
Route::get('/news', 'User\UserController@news')->name('news');
Route::get('/about', 'User\UserController@about')->name('about');
Route::get('/gallery', 'User\UserController@gallery')->name('gallery');
Route::get('/contact', 'User\UserController@contact')->name('contact');
// routes
Auth::routes();
// login validasi
Route::middleware('guest')->group(function(){
    Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');
});
// admin access
Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('auth')->group(function(){
    // Dashboard
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    // Profile
    Route::prefix('profile')->name('profile.')->group(function(){
        Route::get('/profile', 'ProfileController@index')->name('profile');
        Route::post('/store', 'ProfileController@store')->name('store');
        Route::get('/detail/{profile:slug}', 'ProfileController@show')->name('detail');
        Route::get('/edit/{profile:slug}', 'ProfileController@edit')->name('edit');
        Route::put('/update/{id}', 'ProfileController@update')->name('update');
    });
    // Profile Body
    Route::prefix('profile')->name('body.')->group(function(){
        Route::get('/body', 'BodyController@index')->name('body');
        Route::post('/bodystore', 'BodyController@store')->name('store');
        Route::delete('/bodydestroy/{body:slug}', 'BodyController@destroy')->name('delete');
        Route::get('/bodyedit/{body:slug}', 'BodyController@edit')->name('edit');
        Route::put('/bodyupdate/{body:slug}', 'BodyController@update')->name('update');
    });
    // News
    Route::prefix('news')->name('news.')->group(function(){
        Route::get('/news', 'NewsController@index')->name('news');
        Route::post('/newstore', 'NewsController@store')->name('store');
        Route::delete('/newsdestroy/{news:slug}', 'NewsController@destroy')->name('delete');
        Route::get('/newsedit/{news:slug}', 'NewsController@edit')->name('edit');
        Route::put('/newsupdate/{id}', 'NewsController@update')->name('update');
    });
    // Gallery
    Route::prefix('galery')->name('galery.')->group(function(){
        Route::get('/galery', 'GaleryController@index')->name('galery');
        Route::post('/galerystore', 'GaleryController@store')->name('store');
        Route::delete('/galerydestroy/{id}', 'GaleryController@destroy')->name('delete');
        Route::get('/galeryedit/{id}', 'GaleryController@edit')->name('edit');
        Route::put('/galeryupdate/{id}', 'GaleryController@update')->name('update');
    });
    // Contact
    Route::prefix('contact')->name('contact.')->group(function(){
        Route::get('/contact', 'ContactController@index')->name('contact');
        Route::post('/contactstore', 'ContactController@store')->name('store');
        Route::get('/contactedit/{contact:slug}', 'ContactController@edit')->name('edit');
        Route::put('/contactupdate/{contact:slug}', 'ContactController@update')->name('update');
    });
});
