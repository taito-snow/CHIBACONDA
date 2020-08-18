@extends('app')

@section('title', 'ユーザー登録')

@section('content')

@include('nav')
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
            <h1 class="text-center"><a class="text-dark" href="/">CHIBACONDA</a></h1>
            <div class="card mt-3">
                <div class="card-body text-center">
                    <h2 class="h3 card-title text-center mt-2">ユーザー登録</h2>

                    <div class="card-text">
                        <form method="POST" action="">
                            @csrf
                            <div class="md-form">
                                <label for="name">ユーザー名</label>
                                <input class="form-control" type="text" id="name" name="name" required value="">
                                <small>英数字3〜16文字(登録後の変更はできません)</small>
                            </div>
                            <div class="md-form">
                                <label for="password">パスワード</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>
                            <div class="md-form">
                                <label for="password_confirmation">パスワード(確認)</label>
                                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <div class="md-form">
                                <p style="float:left;">性別</p>
                                <select class="form-control" name="gender" id="gender" required><option value="1">男</option><option value="2">女</option></select>
                            </div>
                            <div class="md-form">
                                <p style="float:left;">年齢</p>
                                <select class="form-control" id="age" name="age" required> <option value="">選択してください</option> <option value="20歳未満">20歳未満</option> <option value="20-29歳">20-29歳</option> <option value="30-39歳">30-39歳</option> <option value="40-49歳">40-49歳</option> <option value="50-59歳">50-59歳</option> <option value="60-69歳">60-69歳</option> <option value="70-79歳">70-79歳</option> <option value="80歳以上">80歳以上</option> </select>
                            </div>
                            <button class="btn btn-block purple-gradient mt-2 mb-2" type="submit">ユーザー登録</button>
                        </form>

                        <div class="mt-0">
                            <a href="/login" class="card-text">ログインはこちら</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection