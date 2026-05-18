<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['message', 'post_id'];
    
    protected $touches = ['post']; // ВАЖНО для touches
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}