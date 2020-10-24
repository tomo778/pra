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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'BlogController@index')
    ->name('index');
    
Route::get('/detail/{id}', 'BlogController@detail')
    ->name('detail');
    
// Route::group(['prefix' => 'contact'], function () {
// 	Route::get('/', 'ContactController@index')
// 		->name('contact');
// 	Route::post('/', 'ContactController@back');
// 	Route::post('confirm', 'ContactController@confirm')
// 		->name('contact_confirm');
// 	Route::post('finish', 'ContactController@finish')
// 		->name('contact_finish');
// });