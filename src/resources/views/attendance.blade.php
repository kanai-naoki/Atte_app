@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('nav')
<nav class="header-nav">
  <ul class="header-nav-list">
    <li class="header-nav-item"><a href="/">ホーム</a></li>
    <li class="header-nav-item"><a href="/attendance">日付一覧</a></li>
    <li class="header-nav-item">
      <form class="form" action="/logout" method="post">
        <button class="header-nav__button">ログアウト</button>
    </li>    
  </ul>
</nav>
@endsection

@section('content')
{{-- attendanceのUIを確認しながら作成 --}}
<div class="attendance_content">
  <div class="date_search">

  </div>
  <div class="search_result-table">
    @if (@isset($item))
    <table class="search_table_inner">
      <tr class="search_table_row">
        <th class="search_table_header">名前</th>
        <th class="search_table_header">勤務開始</th>
        <th class="search_table_header">勤務終了</th>
        <th class="search_table_header">休憩時間</th>
        <th class="search_table_header">勤務時間</th>
      </tr>
      <tr class="search_result-table_row">
        <td class="search_table">{{$item->name}}</td>
        {{-- <td class="search_table">{{$item->勤務開始を表す変数}}</td> --}}
        {{-- <td class="search_table">{{$item->勤務修了を表す変数}}</td> --}}
        {{-- <td class="search_table">{{$item->休憩時間の合計を表す変数}}</td> --}}
        {{-- <td class="search_table">{{$item->勤務時間の合計を表す変数}}</td> --}}
      </tr>
    </table>
    @endif    
  </div> 
  <div class="pagenation_area">
    {{-- 5件ごと情報を得るページネーションを作成 --}}
  </div>         
</div>
@endsection