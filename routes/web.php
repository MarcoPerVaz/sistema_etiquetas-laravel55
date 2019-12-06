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
/* Ejercicio 6 */
use Conner\Tagging\Model\Tag;
Route::get('/', function () {
    
    /* Ejercicio 1 - Crear un post cada que se actualice la página*/
        // $post = Post::create( [
        //     'title' => 'Tutorial',
        //     'body'  => 'Contenido',
        // ] );

        // dd($post);

    /* Ejercicio 2 - Encontrar el post con el id 1*/
        // $post = Post::find(1);
        // $post->tag( ['php', 'laravel'] );

        // dd($post->tags);

    /* Ejercicio 3 - Encontrar el post con el id 4*/
        // $post = Post::find(4);
        // $post->tag( ['php'] );

        // dd($post->tags);
    /* Ejercicio 4 - Borrar los tags con el id 4 y etiqueta php */
        // $post = Post::find(4);
        // $post->untag( ['php'] );

        // dd($post->tags);
    /* Ejercicio 5 - borrar todos los tags del id 1 */
        // $post = Post::find(1);
        // $post->untag(  );

        // dd($post->tags);
    /* Ejercicio 6 - Crear tags para practicar*/
        // $post = Post::find(3);
        // $post->tag( ['php', 'laravel', 'html', 'vuejs'] );

        // dd($post->tags);

        /* Encontrar el tag con el id 3 y asignar true al campo suggest */
        // $tag = Tag::find(3);
        // $tag->suggest = true;
        // $tag->save();
        
        // dd($post->tags);

        // dd($tag);

        /* Obtener los campos con el valor de true en el campo suggest */
        $tags = Tag::suggested()->get();

        dd($tags);
});
