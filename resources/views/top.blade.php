@extends('layout')

@section('title', 'Larach')
@section('content')

  <h1 class="my-5">Welcome to LaraCh</h1>
  <h2 class="my-4">スレッド検索</h2>
  <div class="my-2">
    <p>ワードで検索！</p>
  </div>
  <form class="form-group" action="{{ action('SearchController@word') }}">
    <p>
    <div class="row">
      <input type="text" class="form-control col-sm-6  offset-sm-2" placeholder="検索ワードを入力してください" name="word">
      <input type="submit" class="form-control col-sm-2">
    </div>
    </p>
    @if ($errors->has('word'))
    <p style="color:red;">{{ $errors->first('word') }}</p>
    @endif
  </form>
  <p >カテゴリで検索！</p>
  <form class="form-group" action="{{ action('SearchController@category') }}" class="form-group">  
    <p>
      <div class="row">
        <select class="form-control col-sm-6  offset-sm-2">
          <option value="" hidden>カテゴリを選択してください</option>
          @foreach($cates as $cate)
            <option value="{{$cate->cates_name}}">{{ $cate->cates_name }}</option>
          @endforeach
        </select>
        <input class="form-control col-sm-2" type="submit">
      </div>
    </p>
    @if ($errors->has('cate'))
    <p style="color:red;">{{ $errors->first('cate') }}</p>
    @endif
  </form>
  <div class="mt-5 mb-4">
    <h2>新規スレッド作成</h2>
  </div>
  <a class="btn btn-secondary" href="{{ url('/create') }}">新規スレッド作成</a>

@endsection