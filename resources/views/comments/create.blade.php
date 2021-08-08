@extends('layouts.app')
@section('content')

  <div class="container">
      
      <div class="row justify-content-center mt-5">
          <div class="col-md-8">
            <h2>以下の記事にコメントします</h2>
              <div class="card mt-3">
                  <div class="card-header">
                      <h5>タイトル：ここに記事タイトルが表示されます</h5>
                  </div>
                  <div class="card-body">
                  <p class="card-text">内容：記事の内容が表示されます。記事の内容が表示されます。記事の内...</p>
                  <p>投稿日時：2021-03-12</p>
                  
                  </div>
              </div>
          </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form action="#">
                <input type="hidden" name="post_id" value="">
                <div class="form-group">
                    <label>コメント</label>
                    <textarea class="form-control" 
                    placeholder="内容" rows="5" name="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">コメントする</button>
            </form>
        </div>
      </div>
  </div>
@endsection