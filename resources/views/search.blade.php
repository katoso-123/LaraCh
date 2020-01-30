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
<p>{{$count}}件</p>
@endif
<table class="table">
<thead class="thead-dark">
  <tr><th>タイトル</></th><th>レス数</th><th>作成日時</th><th>最終投稿日時</th></tr>
</thead>
<tbody>
@foreach($data as $item)
    <tr>
      <td><a href="{{action('ThreadController@read',$item->threads_id)}}">{{$item->title}}</td>
      <td>{{$item->res_count}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->res_latest}}</td>
    </tr> 
@endforeach
</tbody>
</table>

{{ $data->appends('name', $name)->links() }}
@endsection