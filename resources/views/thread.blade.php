@extends('layout')

@section('title', 'スレ')
@section('content')
  
  <table>
    <tr><td><h1>{{ $thread->title }}</h1></td></tr>
    <tr><td>作成日時：{{ $thread->created_at }}</td><td><a href="{{ url('/search/category') }}">{{ $thread->cates_name }}</a></td></tr>
  </table>
  <!-- foreachでresDBを回す -->
  <table>
  @foreach($ress as $res)
    <tr><td>{{ 'No' }}</td><td>{{ $res->created_at }}</td><td>{{ '投稿者ID' }}</td></tr>
    <tr><td>{{ $res->body }}</td></tr>
  @endforeach
  </table>
  <form action="{{ action('ThreadController@res', $thread->id) }}">
    <p><input type="text" placeholder="レス内容を入力してください" name="body"><input type="submit"></p>
  </form>


@endsection