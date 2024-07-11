@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('nav')

@endsection

@section('content')
<div class="timestamp_content">
  <div class="timestamp_header">
    <h2>{{ $timestamp['name'] }}さんお疲れ様です！</h2>
  </div>
  <div class="timestamp_form_area">
    <form class="form" action="/timestamps" method="post">
      <input class="form_attendance" type="submit" value="勤務開始">
      <input class="form_leaving" type="submit" value="勤務修了">
      <input class="form_break" type="submit" value="休憩開始">
      <input class="form_getback" type="submit" value="休憩終了">
    </form>
  </div>
</div>
@endsection