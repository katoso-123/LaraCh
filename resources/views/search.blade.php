@extends('layout')

@section('title', '検索結果')
@section('content')

@if(true)
<h1>「」の検索結果</h1>
<p>〇件</p>
@else
<h1>カテゴリ「」の結果</h1>
<p>〇件</p>
@endif

<table>
  <tr><td><a href="{{url('/read')}}">タイトル</a></td><td>レス数</td><td>作成日時</td><td>最終投稿日時</td></tr>
  <!-- foreach -->
</table>

<ul>
  <li>1</li>
  <li>2</li>
  <li>3</li>
</ul>

@endsection