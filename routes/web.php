<?php

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'DefaultPagesController@welcome')->name('welcome');
Route::get('/contact', 'DefaultPagesController@contact')->name('contact');
Route::get('/disclaimer', 'DefaultPagesController@disclaimer')->name('disclaimer');
Route::get('/terms', 'DefaultPagesController@terms')->name('terms');

Route::group([
    'middleware' => ['role:admin'],
    'prefix' => 'admin'
], function () {
    Route::get('/', 'AdminController@index')->name('admin-index');
});

Route::post('/generate', 'Link\LinkController@generate')->name('url.generate');
Route::get('/r/{code}', 'Link\LinkController@showRedirect')->name('url.showRedirect');
