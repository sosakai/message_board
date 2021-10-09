<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;
use App\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Posts $post){

        $like = New Like();
        $like->post_id = $post->id;
        $like->user_id = Auth::user()->id;
        $like->save();
        return redirect('post');
    }

    public function unlike($id){
        $like=Like::where('post_id', $id);
        $like->delete();
        return redirect('post');
    }

}
