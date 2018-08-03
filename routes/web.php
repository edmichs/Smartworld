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

Route::get('about', [
    'as' => 'about_path',
    'uses' => 'HomeController@getAboutPage'
]);
Route::get('news', [
    'as' => 'news_path',
    'uses' => 'HomeController@getNewsPage'
]);
Route::get('contact', [
    'as' => 'contact_path',
    'uses' => 'HomeController@getContactPage'
]);
Route::get('cotation', [
    'as' => 'cotation_path',
    'uses' => 'HomeController@getCotationPage'
]);