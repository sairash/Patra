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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/notebook', function () {
    return view('notebook');
});


Route::get('/onlyonceperday', function () {
    return view('onlyOncePerDay');
});

Auth::routes();

Route::get('/home', 'NoteBookController@homePage')->name('home');
Route::get('/read/new', 'NoteBookController@readNew')->name('home');

Route::get('/read/{id}', 'NoteBookController@readDiary')->name('home');
Route::get('/write', 'NoteBookController@writeDiary')->name('home');
Route::get('/customize', 'NoteBookController@customize')->name('customize');
Route::post('/changecover','NoteBookController@changeCover')->name('changeCover');
Route::post('/changebackfrontcovercolor', 'NoteBookController@changeBackFrontCoverColor')->name('coverChange');
Route::post('/writediary', 'NoteBookController@addDiary')->name('addDiary');
Route::post('/editdiary', 'NoteBookController@editDiary')->name('editdiary');

Route::get('/edit', 'NoteBookController@edit')->name('home');


Route::post('/changefrontcover', 'NoteBookController@changeFrontCover')->name('coverChange');
Route::get('/defaultcover/', 'NoteBookController@defaultCover')->name('defaultCover');
Route::get('/randomcover/', 'NoteBookController@randomCover')->name('randomCover');


Route::get('/givemediaryData/{page_id}', 'NoteBookController@sendPageDataOnRequest')->name('givemediaryData');


Route::get('/test', 'NoteBookController@test')->name('test');

Route::get('/getPage', 'NoteBookController@showDiaryDataByDate')->name('getPage');


Route::get('/senddates', 'NoteBookController@sendDates')->name('senddates');
