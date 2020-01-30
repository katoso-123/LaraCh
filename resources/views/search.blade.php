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

  <table class="table table-bordered">
    <tr class="table-dark"><td>タイトル</></td><td>レス数</td><td>作成日時</td><td>最終投稿日時</td></tr>
    @foreach($data as $item)
    <tr class="table-secondary">
      <td><a href="{{action('ThreadController@read',$item->threads_id)}}" class="text-info">{{$item->title}}</td>
      <td>{{$item->res_count}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->res_latest}}</td>
    </tr> 
<<<<<<< HEAD
@endforeach
</tbody>
</table>

=======
    @endforeach
  </table>
>>>>>>> d25626fcc3e8160e1734da4c9e3cf22c79abcf35
{{ $data->appends('name', $name)->links() }}
@endsection