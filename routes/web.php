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

/* Ruta index o home */
Route::get( '/', 'PostController@index' )->name( 'posts.index' );

/* Ruta para guardar las etiquetas */
Route::post( 'guardar-post', 'PostController@store' )->name( 'posts.store' );
