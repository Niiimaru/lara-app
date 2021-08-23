@extends('layouts.app_original')
@section('content')
<div class="container mt-5">
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
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>メニュー</label>
                    <input type="text" class="form-control" placeholder="メニューを入力して下さい" name="title" value="{{ old('title') }}" >
                </div>
                <div class="form-group">
                    <label>内容</label>
                    <textarea class="form-control" placeholder="kg, rep, set数を記入してください。" rows="5" name="body" style="text-align: left" >{{ old('body') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 10px" >作成</button>
            </form>
        </div>
    </div>
</div>
@endsection