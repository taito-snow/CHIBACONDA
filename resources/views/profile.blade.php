@extends('app')

@section('title', 'プロフィール設定')

@section('content')
  @include('nav')

  <div class="container" style="margin-top: 20px;">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a class="text-dark" href="/">CHIBACONDA</a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">プロフィール設定</h2>

            
            <div class="card-text">
              <form method="POST" action="">
                @csrf

                <div class="md-form">
                  <p>服のジャンル</p>
                  <select class="form-control" name="cloth" id="cloth" required><option value="1">カジュアル</option><option value="2">綺麗め</option></select>
                </div>

                <div class="md-form">
                  <p>価格帯</p>
                  <select class="form-control" name="price" id="price" required><option value="1">高い</option><option value="2">安い</option></select>
                </div>

                <input type="hidden" name="remember" id="remember" value="on">

                <button class="btn btn-block purple-gradient mt-2 mb-2" type="submit">登録</button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection