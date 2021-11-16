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

Route::get('/', "SentencesController@index");

Route::get('/sentences/{matrix}/edit','SentencesController@edit')->name('sentences.edit');

Route::patch('/sentences/{matrix}','SentencesController@update')->name('sentences.update');
