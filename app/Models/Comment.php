<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function photos()
    {
        return $this->belongsTo(Picture::class,'picture_id');
    }

    public function posts()
    {
        return $this->belongsTo(Post::class,'post_id');
    }
}
