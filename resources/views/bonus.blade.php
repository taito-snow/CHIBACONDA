@extends('app')

@section('title', 'CHIBACONDA')

@section('content')
    @include('nav')

    <div class="container">
        <div class="card mt-3">
            <div class="card-body pt-0 pb-2">
              <h3 class="h4 card-title" style="margin-top:25px; text-align:center;">
                  ログインボーナス
              </h3>
              <div class="card-text" style="margin-top:30px;">
                ログインボーナス獲得！！<br><br>累計ポイント：〇〇
              </div>
            </div>
        </div>
    </div>
@endsection