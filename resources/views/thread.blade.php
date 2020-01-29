@extends('layout')

@section('title', 'スレ')
@section('content')
  
  <table>
    <tr><td><h1>{{ $title }}</h1></td></tr>
    <tr><td>{{ $created_at }}</td><td><a href="{{ url('/search/category') }}">{{ $cates_name }}</a></td></tr>
  </table>
  <!-- foreachでresDBを回す -->
  <table>
    <tr><td>{{ 'No' }}</td><td>{{ '投稿日時' }}</td><td>{{ '投稿者ID' }}</td></tr>
    <tr><td>{{ 'テキスト' }}</td></tr>
  </table>
  <form action="{{ url('/res') }}">
    <p><input type="text" placeholder="レス内容を入力してください"><input type="submit"></p>
  </form>


@endsection