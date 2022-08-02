<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['post_title', 'post_body'];
    protected $hidden = ['created_at', 'updated_at'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }


    public function show() {
        return view('posts', [
            'posts' => static::all(),
            'title' => 'Posts Page',
        ]);
    }
}
