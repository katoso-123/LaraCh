@extends('layout')

@section('title', '新規スレ作成')
@section('content')

<h1>スレッドを作成する</h1>
<form action="{{ url('/new') }}" method="post"> 
@csrf
  <p>スレタイを入力してください</p>
  <p><input type="text" name="title"></p>
  <p>カテゴリを選択してください</p>
  <select name="cate">
    <option value="" hidden>カテゴリを選択してください</option>
    @foreach($cates as $cate)
    <option value="{{ $cate -> cates_name }}">{{ $cate -> cates_name }}</option>
    @endforeach
  </select>
  <p><input type="submit" value="作成する"></p>
</form>


@endsection