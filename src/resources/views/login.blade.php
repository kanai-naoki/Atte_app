@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login_content">
  <div class="login_header">
    <h2>ログイン</h2>
  </div>
  <div class="login_form_area">
    {{-- actionのリンク先を考える→ログイン後の処理を考える--}}
    <form class="form" action="/" method="post"> 
      <input class="form_email" type="email" name="email" placeholder="メールアドレス" >
      <input class="form_password" type="password" name="password" placeholder="パスワード">
      <input class="submit" type="submit" value="ログイン">
    </form>
  </div>
  <div class="login_registerlink">
    <p>アカウントをお持ちでない方はこちらから<br>
      <a href="/register">会員登録</a>
    </p>
  </div>
</div>
@endsection