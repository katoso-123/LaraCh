@extends('layout')

@section('title', 'Larach')
@section('content')

  <h1 class="my-5">Welcome to LaraCh</h1>
  <h2 class="my-3">スレッド検索</h2>
    <p>ワードで検索！</p>
  <form class="form-group" action="{{ action('SearchController@word') }}">
    <p>
    <div class="row mx-3">
      <input type="text"  class="form-control col-lg-4 offset-lg-3 col-sm-6 offset-sm-2" placeholder="検索ワードを入力してください" name="word">
      <input type="submit" class="form-control col-lg-2 col-sm-2 ml-sm-3 ml-lg-3">
    </div>
    </p>
    @if ($errors->has('word'))
    <p style="color:red;">{{ $errors->first('word') }}</p>
    @endif
  </form>
  <p >カテゴリで検索！</p>
    <div class="container">
      <div class="row">
      @foreach($cates as $cate)
        <div class="col-4">
        <a class="btn m-1 btn-warning" style="width:99%;" href="{{action('SearchController@category',$cate->cates_name)}}">{{ $cate->cates_name }}({{ $cate->thread_count}})</a>
        </div>
      @endforeach
      </div>
    </div>
    @if ($errors->has('cate'))
    <p style="color:red;">{{ $errors->first('cate') }}</p>
    @endif
  <div class="mt-5 mb-3">
    <h2>新規スレッド作成</h2>
  </div>
  <a class="btn btn-secondary" href="{{ url('/create') }}">新規スレッド作成</a>

@endsection