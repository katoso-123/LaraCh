@extends('layout')

@section('title', '新規スレ作成')
@section('content')

<h1 class="my-5">スレッドを作成する</h1>
<form class="form-group" action="{{ url('/new') }}" method="post"> 
@csrf
  <p>スレタイを入力してください</p>
  <p><input type="text" class="form-control col-sm-6  offset-sm-3" name="title" value="{{ old('title') }}"></p>
  @if ($errors->has('title'))
  <p style="color:red;">{{ $errors->first('title') }}</p>
  @endif
  <p>カテゴリを選択してください</p>
  <select class="form-control custom-select col-sm-6" name="cate" value="{{ old('cate') }}">
    <option value="" hidden>カテゴリを選択してください</option>
    @foreach($cates as $cate)
    <option value="{{ $cate -> cates_name }}">{{ $cate -> cates_name }}</option>
    @endforeach
  </select>
  @if ($errors->has('cate'))
  <p style="color:red;">{{ $errors->first('cate') }}</p>
  @endif
  <p>投稿</p>
  <p><input type="text" class="form-control col-sm-6  offset-sm-3" name="body" value="{{ old('body') }}"></p>
  @if ($errors->has('body'))
  <p style="color:red;">{{ $errors->first('body') }}</p>
  @endif
  <p><input type="submit" class="form-control col-sm-2 offset-sm-5 mt-3" value="作成する"></p>
</form>
<p><a href="{{url('/')}}">検索ページに戻る</a></p>

@endsection