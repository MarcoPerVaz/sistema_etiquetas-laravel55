<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        {{-- Css Bootstrap 3.3.7 --}}
        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        {{-- Css Tags input 0.8.0 --}}
        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">

        <title>Sistema de Etiquetas</title>

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <h1 class="page-header">Tutorial de Tags (Sistema de etiquetas)</h1>
                    
                    @if ( session('info') )
                        <div class="alert alert-success">
                            {{ session( 'info' ) }}
                        </div>
                    @endif   

                    @if ( count($errors) )
                        <div class="alert alert-success">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif    
                
                    <form method="POST" action="{{ route('posts.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="body">Contenido</label>
                            <textarea type="text" name="body" rows="7" class="form-control"></textarea>
                        </div>
                        <div class="form-group well">
                            <label for="tags">Etiquetas (palabras separadas por coma)</label>
                            <input type="text" name="tags" data-role="tagsinput" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                    </form>
                    <hr>
                    @foreach ($posts as $post)
                        <div class="panel panel-primary">
                            <div class="panel-heading">{{ $post->title }}</div>
                            <div class="panel-body">{{ $post->body }}</div>
                            <div class="panel-footer">
                                @forelse ($post->tags as $tag)
                                    <span class="label label-info">{{ $tag->name }}</span>
                                @empty
                                    <em>Sin etiquetas</em>
                                @endforelse
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- JS Jquery --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        {{-- JS Bootstrap 3.3.7 --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        {{-- JS Tags Input 0.8.0 --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    </body>
</html>
