@extends('layout')

@section('title', 'Larach')
@section('content')

  <h1>スレッド検索</h1>
  <form action="{{ action('SearchController@word') }}">
    <p>ワードで検索！</p>
    <p><input type="text" placeholder="検索ワードを入力してください" name="word"><input type="submit"></p>
  </form>
  <form action="{{ url('/search/category') }}">
    <p>カテゴリで検索！</p>
    <p>
      <select>
        <option value="" hidden>カテゴリを選択してください</option>
        <!-- foreachでoptionを回す -->
        <option value="カテゴリid">カテゴリ名</option>
      </select>
      <input type="submit">
    </p>
  </form>
  <h1>新規スレッド作成</h1>
  <a href="{{ url('/create') }}">新規スレッド作成</a>

@endsection