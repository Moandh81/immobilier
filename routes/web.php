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

//Route::get('/form', 'TestController@getForm')->name('getForm');
//Route::post('/form', 'TestController@postForm')->name('postForm');


Route::get('/ajouter_bien', 'BiensController@getForm')->name('getForm')->middleware('auth');;
Route::post('/ajouter_bien', 'BiensController@postForm')->name('postForm')->middleware('auth');;

Route::get('/liste_biens', 'BiensController@getListeBiens')->name('getListeBiens')->middleware('auth');;

Route::get('update_bien/{id}', 'BiensController@getUpdatedBien')->name('getUpdatedBien')->middleware('auth');;
Route::post('update_bien/{id}', 'BiensController@postUpdatedBien')->name('postUpdatedBien')->middleware('auth');;



Route::get('delete_bien/{id}', 'BiensController@getDeleteBien')->name('getDeleteBien')->middleware('auth');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
