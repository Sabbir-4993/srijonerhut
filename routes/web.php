<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Frontend\PageController@index')->name('index');
Route::group(['prefix'=>'festival', 'as'=>'festival.'], function (){
    Route::get('/schedule', 'Frontend\PageController@schedule')->name('schedule');
    Route::get('/tickets', 'Frontend\PageController@tickets')->name('tickets');
    Route::get('/sponsors', 'Frontend\PageController@sponsors')->name('sponsors');
    Route::get('/become-a-member', 'Frontend\PageController@member')->name('membership');
});

Route::get('/about', 'Frontend\PageController@about')->name('about');
Route::group(['prefix'=>'news', 'as'=>'news.'], function (){
    Route::get('/gallery', 'Frontend\PageController@gallery')->name('gallery');
    Route::get('/video', 'Frontend\PageController@video')->name('video');
});
Route::get('/contact', 'Frontend\PageController@contact')->name('contact');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
