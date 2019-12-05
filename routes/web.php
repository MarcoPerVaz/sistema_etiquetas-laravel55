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

/* Ruta por defecto */
use App\Post;
Route::get('/', function () {
    
    /* Ejercicio 1 */
        // $post = Post::create( [
        //     'title' => 'Tutorial',
        //     'body'  => 'Contenido',
        // ] );

        // dd($post);

    /* Ejercicio 2 */
        // $post = Post::find(1);
        // $post->tag( ['php', 'laravel'] );

        // dd($post->tags);

    /* Ejercicio 3 */
        $post = Post::find(4);
        $post->tag( ['php'] );

        dd($post->tags);
});
