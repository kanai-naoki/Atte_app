@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register_content">
  <div class="register_header">
    <h2>会員登録</h2>
  </div>
  <div class="register_form_area">
    {{-- actionのリンク先を考える --}}
    <form class="form" action="/" method="post">
      <input class="form_name" type="name" name="name" placeholder="名前">
      <input class="form_email" type="email" name="email" placeholder="メールアドレス" >
      <input class="form_password" type="password" name="password" placeholder="パスワード">
      <input class="form_confirm_password" type="password" name="confirm_password" placeholder="確認用パスワード">
      <input class="submit" type="submit" value="会員登録">
    </form>
  </div>
  <div class="register_loginlink">
    <p>アカウントをお持ちの方はこちらから<br>
      <a href="/login">ログイン</a>
    </p>
  </div>
</div>
@endsection