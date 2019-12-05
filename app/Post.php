<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Importado
use Conner\Tagging\Taggable;

class Post extends Model
{
    use Taggable;

    protected $fillable = [
        'title', 'body',
    ];
}
