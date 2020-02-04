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
      <input type="submit" class="form-control col-lg-2 col-sm-2 ml-sm-3 ml-lg-3" value="検索">
    </div>
    </p>
    @if ($errors->has('word'))
    <p style="color:red;">{{ $errors->first('word') }}</p>
    @endif
  </form>
  <p >カテゴリで検索！う</p>
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
  <a class="btn btn-secondary mb-3 p-2 px-5" href="{{ url('/create') }}">新規スレッド作成</a>

  <table class="table table-bordered">
    <tr class="thead-dark"><th colspan="3">人気スレ</th></tr>
    <tr class="thead-dark"><th>スレタイ</th><th>レス数</th><th>最終投稿時間</th></tr>
    @foreach($threads as $item)
    <tr><td><a href="{{action('ThreadController@read',$item->threads_id)}}">{{ $item->title }}</a></td><td>({{ $item->res_count }})</td><td>{{ $item->updated_at }}</td></tr> 
    @endforeach
  </table>
  
  

@endsection