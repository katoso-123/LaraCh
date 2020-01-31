<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Requests\WordRequest;
use App\Http\Requests\CateRequest;
use App\Thread;
use App\Cate;
use App\Res;

class SearchController extends Controller
{
    //top画面⇒word検索ボタン
    public function word(WordRequest $request){

        //スレ表示処理
        $query = Thread::query();
        $query->where('title','like','%'.$request->word.'%');
        $data = $query->orderBy('created_at','desc')->paginate(10);
        //検索ヒット数
        $count = $query->count();
        
        foreach($data as $item){
            //レス数取得処理
            $res = Res::where('threads_id', $item->threads_id);
            $item->res_count = $res->count();
            //最新投稿日時
            $res_latest = $res->latest()->first();
            if(isset($res_latest->created_at)){
                $item->res_latest = $res_latest->created_at;
            }else{
                $item->res_latest = "まだ投稿がありません";
            }
        }


        return view('search')->with([
            'count' => $count,
            'name' => $request->word,
            'data' => $data,
            'result' => true,
            ]);
    }

    //top画面⇒カテゴリ検索ボタン
    public function category(CateRequest $request){

        $query = Thread::query();
        $query->where('cates_name',$request->cate);
        $data = $query->orderBy('created_at','desc')->paginate(10);
        //検索ヒット数
        $count = $query->count();

        foreach($data as $item){
            //レス数取得処理
            $res = Res::where('threads_id', $item->threads_id);
            $item->res_count = $res->count();
            //最新投稿日時
            $res_latest = $res->latest()->first();
            if(isset($res_latest->created_at)){
                $item->res_latest = $res_latest->created_at;
            }else{
                $item->res_latest = "まだ投稿がありません";
            }
        }

        return view('search')->with([
            'count' => $count,
            'name'=> $request->cate,
            'data' => $data,
            'result'=>false,
            ]);
    }
    

    //Thread画面⇒カテゴリボタン
    public function threadcate(Thread $thread){
        $query = Thread::query();
        $data = Thread::where('cates_name',$thread->cates_name)->orderBy('created_at','desc')->paginate(10);
        $count = $data->count();

        foreach($data as $item){
            //レス数取得処理
            $res = Res::where('threads_id', $item->threads_id);
            $item->res_count = $res->count();
            //最新投稿日時
            $res_latest = $res->latest()->first();
            if(isset($res_latest->created_at)){
                $item->res_latest = $res_latest->created_at;
            }else{
                $item->res_latest = "まだ投稿がありません";
            }
        }

        return view('search')->with([
            'count' => $count,
            'name'=> $thread->cates_name,
            'data' => $data,
            'result'=>false,
            ]);
    }

    //Search画面⇒ソート選択
    public function sort(Request $request,$name,$result){

        $sort_type = $request->sort;
        //スレ表示処理
        $query = Thread::query();
        $count = $query->count();

        $data = $query->where('title','like','%'.$name.'%');

        foreach($data as $item){
            //レス数取得処理
            $res = Res::where('threads_id', $item->threads_id);
            $item -> res_count = $res->count();
            //最新投稿日時
            $res_latest = $res->latest()->first();
            if(isset($res_latest->created_at)){
                $item->res_latest = $res_latest->created_at;
            }else{
                $item->res_latest = "まだ投稿がありません";
            }
        }

        if($sort_type==='new'){
            $collection = collect($data);
            $data = $collection->sortBy('created_at');
            // $data = $data->orderBy('created_at','desc')->paginate(10);
        }else if($sort_type==='popular'){
            $collection = collect($data);
            $data = $collection->sortByDesc('res_count');
        }

        foreach($data as $item){
            var_dump($item->id);
        }
        
        dd($data);

        return view('search')->with([
            'count' => $count,
            'name'=> $name,
            'data' => $data,
            'result'=>$result,
            ]);
    }
    
}

