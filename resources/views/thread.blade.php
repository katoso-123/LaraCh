@extends('layout')

@section('title', 'スレ')
@section('content')
  
  <table>
    <div class="mt-3">
      <tr><td>{{ $thread->created_at }}</td><td><a href="{{ action('SearchController@threadCate', $thread->threads_id) }}">{{ $thread->cates_name }}</a></td></tr>
    </div>
    <div class="">
      <tr><td><h1>{{ $thread->title }}</h1></td></tr>
    </div>
  </table>
  <!-- foreachでresDBを回す -->
  <table class="table table-hover">
  <tr><td>No.</td><td>内容</td><td>投稿日時</td><td>名前</td></tr>
  @foreach($ress as $res)
    <tr><td>{{ ++$number }}</td><td>{{ $res->body }}</td><td>{{ $res->created_at }}</td><td>{{ $res->name }}</td></tr>
  @endforeach
  </table>
  <form action="{{ action('ThreadController@res', $thread->threads_id) }}">
    <p>書込：<input type="text" placeholder="レス内容を入力してください" name="body" value="{{ old('body') }}"></p>
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