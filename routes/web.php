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

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('registerForm');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('loginForm');
Route::post('/login', 'Auth\LoginController@memberLogin')->name('memberLogin');
Route::get('/contentPages', 'Controller@showContentPages')->name('contentPages');
Route::post('/creat_content_pages', 'Controller@gerCreatContentPages')->name('creatContentPages');
