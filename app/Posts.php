<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['title','content'];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function nices(){
        return $this->belongsToMany(User::class,'nices', 'post_id', 'user_id')
                    ->withPivot('user_id');
    }
}
