<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public $timestamps = false;

    public $fillable = [ 'id', 'title','image', 'content','count_view'];


    public function comment(){
        return $this->morphMany(Comment::class,'commenttable');
    }

    public function likedByUsers(){
        return $this->belongsToMany(User::class , 'blog_user');
    }
}
