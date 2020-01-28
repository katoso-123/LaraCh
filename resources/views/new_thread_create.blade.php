@extends('layout')

@section('title', '新規スレ作成')
@section('content')

<h1>スレッドを作成する</h1>
<form action="{{ url('/new') }}" method="post"> 
@csrf
  <p>スレタイを入力してください</p>
  <p><input type="text"></p>
  <p>カテゴリを選択してください</p>
  <select>
    <option value="" hidden>カテゴリを選択してください</option>
    <!-- foreachでoptionを回す -->
    <option value="カテゴリid">カテゴリ名</option>
  </select>
  <p><input type="submit" value="作成する"></p>
</form>


@endsection