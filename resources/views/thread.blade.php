@extends('layout')

@section('title', $thread->title )
@section('content')
  
  <table>
    <div class="mt-4">
      <tr><td>{{ $thread->created_at }}</td><td><a href="{{ action('SearchController@threadCate', $thread->threads_id) }}">{{ $thread->cates_name }}</a></td></tr>
    </div>
    <div >
      <tr><td><h1>{{ $thread->title }}</h1></td></tr>
    </div>
  </table>
  <table class="table table-hover">
  <tr class="thead-dark"><th style="width:20%;">No.</th><th style="width:40%;">名前</th><th style="width:40%;">投稿時間</th></tr>
  @foreach($ress as $res)
    <tr class="table-active"><td>{{ ++$number }}</td><td>{{ $res->name }}</td><td>{{ $res->created_at }}</td></tr>
    <tr><td class="text-left p-4" colspan="3">{{ $res->body }}</td></tr>
  @endforeach
  </table>
  <form action="{{ action('ThreadController@res', $thread->threads_id) }}">
    <p>書込：<input type="text" placeholder="レス内容を入力してください" name="body"></p>
    @if ($errors->has('body'))
    <p style="color:red;">{{ $errors->first('body') }}</p>
    @endif
    <p>名前：<input type="text" placeholder="" name="name" value="名無し"></p>
    @if ($errors->has('name'))
    <p style="color:red;">{{ $errors->first('name') }}</p>
    @endif
    <p><input type="submit"></p>
  </form>


@endsection