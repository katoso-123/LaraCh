@extends('layout')

@section('title', '検索結果')
@section('content')

@if($result)
<h1>「{{$name}}」の検索結果</h1>
@else
<h1>カテゴリ「{{$name}}」の結果</h1>
@endif

@if($count===0)
<p>検索結果がありません</p>
@else
<p>検索ヒット数：{{$count}}件</p>
  <table class="table table-bordered">
    <tr class="thead-dark"><th>タイトル</th><th>レス数</th><th>作成日時</th><th>最終投稿日時</th></tr>
    @endif
    @foreach($data as $item)
    <tr>
      <td><a href="{{action('ThreadController@read',$item->threads_id)}}" class="text-info font-weight-bold">{{$item->title}}</td>
      <td>{{$item->res_count}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->res_latest}}</td>
    </tr> 
    @endforeach
  </table>
{{ $data->appends('name', $name)->links() }}
<p><a href="{{url('/')}}">検索ページに戻る</a></p>
@endsection