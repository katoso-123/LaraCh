@extends('layout')

@section('title', 'スレ')
@section('content')
  <table>
    <tr><td>{{ 'スレッドタイトル' }}</td><td>{{ '作成日時' }}</td><td><a href="{{ url('/search/category') }}">{{ 'カテゴリ' }}</a></td></tr>
  </table>
  <!-- foreachでresDBを回す -->
  <table>
    <tr><td>{{ 'No' }}</td><td>{{ '投稿日時' }}</td><td>{{ '投稿者ID' }}</td></tr>
    <tr><td>{{ 'テキスト' }}</td></tr>
  </table>
  <table>
    <tr><td>{{ 'No' }}</td><td>{{ '投稿日時' }}</td><td>{{ '投稿者ID' }}</td></tr>
    <tr><td>{{ 'テキスト' }}</td></tr>
  </table>
  <form action="{{ url('/res') }}">
    <p><input type="text" placeholder="レス内容を入力してください"><input type="submit"></p>
  </form>


@endsection