@extends('app')

@section('title', 'ログイン')

@section('content')
  @include('nav')

  <div class="container" style="margin-top: 20px;">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a class="text-dark" href="/">CHIBACONDA</a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">ログイン</h2>

            
            <div class="card-text">
              <form method="POST" action="">
                @csrf

                <div class="md-form">
                  <label for="email">ユーザー名</label>
                  <input class="form-control" type="text" id="name" name="name" required value="">
                </div>

                <div class="md-form">
                  <label for="password">パスワード</label>
                  <input class="form-control" type="password" id="password" name="password" required>
                </div>

                <input type="hidden" name="remember" id="remember" value="on">

                <div class="text-left">
                  <a href="" class="card-text">パスワードを忘れた方</a>
                </div>

                <button class="btn btn-block purple-gradient mt-2 mb-2" type="submit">ログイン</button>

              </form>

              <div class="mt-0">
                <a href="/register" class="card-text">ユーザー登録はこちら</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection