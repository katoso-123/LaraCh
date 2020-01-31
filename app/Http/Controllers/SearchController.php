<?php

namespace App\Http\Controllers;

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
            //最新投稿日時
            $res = Res::where('threads_id', $item->threads_id);
            $item->res_latest = $res->latest()->first()->created_at;
        }


        return view('search')->with([
            'count' => $count,
            'name' => $request->word,
            'data' => $data,
            'result' => 1,
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
            //最新投稿日時
            $res = Res::where('threads_id', $item->threads_id);
            $item->res_latest = $res->latest()->first()->created_at;
        }

        return view('search')->with([
            'count' => $count,
            'name'=> $request->cate,
            'data' => $data,
            'result'=> 0,
            ]);
    }
    

    //Thread画面⇒カテゴリボタン
    public function threadcate(Thread $thread){
        $query = Thread::query();
        $data = Thread::where('cates_name',$thread->cates_name)->orderBy('created_at','desc')->paginate(10);
        //検索ヒット数
        $count = $query->count();
        
        foreach($data as $item){
            //最新投稿日時
            $res = Res::where('threads_id', $item->threads_id);
            $item->res_latest = $res->latest()->first()->created_at;
        }

        return view('search')->with([
            'count' => $count,
            'name' => $thread->cates_name,
            'data' => $data,
            'result' => 0,
            ]);
    }

    //Search画面⇒ソート選択
    public function sort(Request $request, $name, $result){

        //ソートタイプ
        $sort_type = $request->sort;

        //スレ表示処理
        $query = Thread::query();

        if($result){//word検索
            $query = $query->where('title','like','%'.$name.'%');
            if($sort_type==='new'){
                $data = $query->orderBy('created_at','desc')->paginate(10);
            }else if($sort_type==='popular'){
                $data = $query->orderBy('res_count','desc')->paginate(10);
            }
        }else{//カテゴリ検索
            $query = $query->where('cates_name',$name);
            if($sort_type==='new'){
                $data = $query->orderBy('created_at','desc')->paginate(10);
            }else if($sort_type==='popular'){
                $data = $query->orderBy('res_count','desc')->paginate(10);                
            }
        }        

        foreach($data as $item){
            //最新投稿日時
            $res = Res::where('threads_id', $item->threads_id);
            $item->res_latest = $res->latest()->first()->created_at;
        }

        $count = $data->count();
        
        return view('search')->with([
            'count' => $count,
            'name'=> $name,
            'data' => $data,
            'result'=>$result,
            ]);
    }
    
}

