@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>一覧</h1>
            @foreach($posts as $post)
            <div class="card mt-3">
                <div class="card-header"><span>タイトル</span>:{{$post->title}}</div>
                <div class="card-body"><span>本文:</span>{{$post->contents}}</div>
                    @if($post->user_id === Auth::id())
                        <form action="{{route('post.destroy',$post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-primary" type="submit" name="delete" value="削除">
                        </form>
                        <form action="{{route('post.edit',$post->id)}}" method="get">
                            @csrf
                            <input class="btn btn-danger" type="submit" name="edit" value="編集">
                        </form>
                    @endif
            </div>
            @endforeach
        </div>
    </div>
@endsection
