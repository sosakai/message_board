@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group">
                <form action="{{route('post.update',$edit->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <div>
                        タイトル
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                        <input class="form-control" name="title" type="text" value="{{$edit->title}}">
                    </div>
                    <div>
                        内容
                        <span class="text-danger">{{ $errors->first('contents') }}</span>
                        <textarea class="form-control" name="contents" cols="30" rows="10" >{{$edit->contents}}</textarea>
                    </div>
                    <input class="btn btn-primary" type="submit" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection
