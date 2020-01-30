@extends('layout')

@section('title', 'Larach')
@section('content')

  <h1>Welcome to LaraCh</h1>
  <h2>スレッド検索</h2>
  <form action="{{ action('SearchController@word') }}">
    <p>ワードで検索！</p>
    <p><input type="text" placeholder="検索ワードを入力してください" name="word"><input type="submit"></p>
    @if ($errors->has('word'))
    <p style="color:red;">{{ $errors->first('word') }}</p>
    @endif
  </form>
  <form action="{{ action('SearchController@category') }}">  
    <p>カテゴリで検索！</p>
    <p>
      <select name="cate">
        <option value="" hidden>カテゴリを選択してください</option>
        @foreach($cates as $cate)
          <option value="{{$cate->cates_name}}">{{ $cate->cates_name }}</option>
        @endforeach
      </select>
      <input type="submit">
    </p>
    @if ($errors->has('cate'))
    <p style="color:red;">{{ $errors->first('cate') }}</p>
    @endif
  </form>
  <h2>新規スレッド作成</h2>
  <a href="{{ url('/create') }}">新規スレッド作成</a>

@endsection