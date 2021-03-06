@extends('layouts.app_original')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('put')
                    <div class="form-group">
                        <label>メニュー</label>
                        <input type="text" class="form-control" value="{{ $post->title }}" name="title">
                    </div>
                    <div class="form-group">
                        <label>内容</label>
                        <textarea class="form-control" rows="5" name="body">{{ $post->body }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px" >更新する</button>
            </form>
        </div>
    </div>
</div>
@endsection