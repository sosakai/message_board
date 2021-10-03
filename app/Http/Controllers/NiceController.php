<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;
use App\Nice;
use Illuminate\Support\Facades\Auth;

class NiceController extends Controller
{
    public function nice(Posts $post){

        $nice = New Nice();
        $nice->post_id = $post->id;
        $nice->user_id = Auth::user()->id;
        $nice->save();
        return redirect('post');
    }

    public function unnice(Posts $post){
        $user=Auth::user()->id;
        $nice=Nice::where('post_id', $post->id)->where('user_id', $user)->first();
        $nice->delete();
        return redirect('post');
    }

}
