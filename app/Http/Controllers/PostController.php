<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Importado
use App\Post;

class PostController extends Controller
{
    /**
     * Función que lista las etiquetas
     */
    public function index()
    {

        $posts = Post::orderBy( 'id', 'DESC' )->get();

        return view( 'index', compact( 'posts' ) );

    }

    /**
     * Función que almacena las etiquetas
     */
    public function store( Request $request )
    {
        $tags = explode( ',', $request->tags );
        
        $post = Post::create( $request->all() );

        $post->tag( $tags );

        return back()->with( 'info', 'Post creado con éxito' );
    }
}
