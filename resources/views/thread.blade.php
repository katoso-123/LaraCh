@extends('layout')

@section('title', $thread->title )
@section('content')
  
  <table>
    <div class="mt-4">
      <tr class="text-left"><td>{{ $thread->created_at }}<a href="{{ action('SearchController@threadCate', $thread->threads_id) }}">{{ $thread->cates_name }}</a></td></tr>
    </div>
    <div >
      <tr><td><h1>{{ $thread->title }}</h1></td></tr>
    </div>
  </table>
  <table class="table table-hover">
  <tr class="thead-dark"><th style="width:20%;">No.</th><th style="width:40%;">名前</th><th style="width:40%;">投稿時間</th></tr>
  @foreach($ress as $res)
    <div style="">
    <tr class="table-sm" ><td>{{ ++$number }}</td><td>{{ $res->name }}</td><td>{{ $res->created_at }}</td></tr>
    </div>
    <tr class="table-active"><td class="text-left p-5" colspan="3">{{ $res->body }}</td></tr>
  @endforeach
  </table>
  <form class="form-group" action="{{ action('ThreadController@res', $thread->threads_id) }}">
    <p>書込<input class="form-control col-4 offset-4" type="text" placeholder="レス内容を入力してください" name="body" value="{{ old('body') }}" size="30"></p>
    @if ($errors->has('body'))
    <p style="color:red;">{{ $errors->first('body') }}</p>
    @endif
    <p>名前<input class="form-control col-4 offset-4" type="text" placeholder="" name="name" value="名無し" size="30"></p>
    @if ($errors->has('name'))
    <p style="color:red;">{{ $errors->first('name') }}</p>
    @endif
    <p><input class="form-control col-2 offset-5" type="submit" value="投稿"></p>
  </form>
  <p><a href="{{url('/')}}">検索ページに戻る</a></p>

@endsection