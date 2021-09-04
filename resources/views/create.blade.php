@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group">
                <form action="{{route('post.store')}}" method="post">
                    @csrf
                    タイトル
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                        <input class="form-control" name="title" type="text" value="{{old('title')}}">
                    内容
                        <span class="text-danger">{{ $errors->first('contents') }}</span>
                        <textarea class="form-control" name="contents" cols="30" rows="10">{{ old('contents') }}</textarea>
                    <input class="btn btn-primary" type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
