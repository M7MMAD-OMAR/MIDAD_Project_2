<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;


class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['post_id', 'comment_title', 'comment_body'];
    protected $hidden = ['created_at', 'updated_at'];


    public function post() {
        return $this->belongsTo(Post::class);
    }




    public function show($id) {
        $post = Post::all()->where('id', $id);
        $comments = static::all()->where('post_id', $id);
        return view('comments', [
            'title' => 'Comments Page',
            'comments' => $comments,
            'post' => $post[$id-1],
        ]);

    }
}
