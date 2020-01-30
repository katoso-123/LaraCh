@extends('layout')

@section('title', 'スレ')
@section('content')
  
  <table>
    <tr><td>{{ $thread->created_at }}</td><td><a href="{{ action('SearchController@threadCate', $thread->threads_id) }}">{{ $thread->cates_name }}</a></td></tr>
    <tr><td><h1>{{ $thread->title }}</h1></td></tr>
  </table>
  <!-- foreachでresDBを回す -->
  <table class="table table-hover">
  @foreach($ress as $res)
    <tr><td>{{ 'No' }}</td><td>{{ $res->body }}</td><td>{{ $res->created_at }}</td><td>{{ $ip }}</td></tr>
  @endforeach
  </table>
  <form action="{{ action('ThreadController@res', $thread->threads_id) }}">
    <p><input type="text" placeholder="レス内容を入力してください" name="body"><input type="submit"></p>
    @if ($errors->has('body'))
    <p style="color:red;">{{ $errors->first('body') }}</p>
    @endif
  </form>


@endsection