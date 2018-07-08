<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'body'];

    public function comments(){
        return $this->hasMany(Comment::class);//identično kao: 'App\Comment'
    }

    public function addComment($body){

        $this->comments()->create(compact('body'));

    }
}
