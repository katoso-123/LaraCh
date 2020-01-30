@extends('layout')

@section('title', 'Larach')
@section('content')

  <h1>Welcome to LaraCh</h1>
  <h2>スレッド検索</h2>
  <form action="{{ action('SearchController@word') }}">
    <p>ワードで検索！</p>
    <p><input type="text" placeholder="検索ワードを入力してください" name="name"><input type="submit"></p>
    @if ($errors->has('name'))
    <p style="color:red;">{{ $errors->first('name') }}</p>
    @endif
  </form>
  <form action="{{ action('SearchController@category') }}" class="form-group">  
    <p>カテゴリで検索！</p>
    <p>
      <select name="name" class="custom-select">
        <option value="" hidden>カテゴリを選択してください</option>
        @foreach($cates as $cate)
          <option value="{{$cate->cates_name}}">{{ $cate->cates_name }}</option>
        @endforeach
      </select>
      <input type="submit">
    </p>
  </form>
  <h2>新規スレッド作成</h2>
  <a href="{{ url('/create') }}">新規スレッド作成</a>

@endsection