@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('nav')
<nav class="header-nav">
  <ul class="header-nav-list">
    <li class="header-nav-item"><a href="/">ホーム</a></li>
    <li class="header-nav-item"><a href="/attendance">日付一覧</a></li>
    {{-- ログアウトのリンク先を検討する --}}
    <li class="header-nav-item"><a href="/">ログアウト</a></li>    
  </ul>
</nav>
@endsection

@section('content')
<div class="timestamp_content">
  <div class="timestamp_header">
    <h2>{{ $timestamp['name'] }}さんお疲れ様です！</h2>
  </div>
  <div class="timestamp_form_area">
    <form class="form" action="/timestamps" method="post">
      <input class="form_button" type="submit" value="勤務開始">
      <input class="form_button" type="submit" value="勤務修了">
      <input class="form_button" type="submit" value="休憩開始">
      <input class="form_button" type="submit" value="休憩終了">
    </form>
  </div>
</div>
@endsection