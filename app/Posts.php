<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['title','content'];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->belongsToMany(User::class,'likes', 'post_id', 'user_id')
                    ->withPivot('user_id');
    }
}
