@extends('layout')

@section('title', 'Larach')
@section('content')

  <h1>スレッド検索</h1>
  <form action="{{ url('/word') }}">
    <p>ワードで検索！</p>
    <p><input type="text" placeholder="検索ワードを入力してください"><input type="submit"></p>
  </form>
  <form action="{{ url('/category') }}">
    <p>カテゴリで検索！</p>
    <p>
      <select>
      <option value="" hidden>カテゴリを選択してください</option>
      <!-- foreachでoptionを回す -->
      <option value="カテゴリid">カテゴリ名</option>
      <input type="submit">
    </p>
  </form>
  <h1>新規スレッド作成</h1>
  <a href="{{ url('/new') }}">新規スレッド作成</a>

@endsection