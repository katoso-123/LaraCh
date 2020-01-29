@extends('layout')

@section('title', '検索結果')
@section('content')

@if($result)
<h1>「{{$name}}」の検索結果</h1>
@else
<h1>カテゴリ「{{$name}}」の結果</h1>
@endif
<p>{{$count}}件</p>
@foreach($data as $item)
  <table>
    <tr><td>タイトル</></td><td>レス数</td><td>作成日時</td><td>最終投稿日時</td></tr>
    <tr>
      <td><a href="{{url('/read',$item->threads_id)}}">{{$item->title}}</td>
      <td></td>
      <td>{{$item->created_at}}</td>
      <td></td>
    </tr>
  </table>
@endforeach
{{ $data->appends('name', $name)->links() }}
@endsection