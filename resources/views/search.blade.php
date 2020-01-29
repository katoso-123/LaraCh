@extends('layout')

@section('title', '検索結果')
@section('content')

@if($result)
<h1>「{{$word}}」の検索結果</h1>
<p>〇件</p>
@foreach($data as $item)
  <table>
    <tr><td>タイトル</></td><td>レス数</td><td>作成日時</td><td>最終投稿日時</td></tr>
    <tr>
      <td><a href="{{url('/read')}}">{{$item->title}}</td>
      <td></td>
      <td></td>
      <td>{{$item->created_at}}</td>
    </tr>
  </table>
@endforeach
{{ $data->appends('word', $word)->links() }}
@else
<h1>カテゴリ「{{$category}}」の結果</h1>
<p>〇件</p>
@endif

@endsection