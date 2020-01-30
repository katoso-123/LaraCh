<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WordRequest;
use App\Thread;
use App\Cate;
use App\Res;

class SearchController extends Controller
{
    //top画面⇒word検索ボタン
    public function word(WordRequest $request){

        //スレ表示処理
        $query = Thread::query();
        $query->where('title','like','%'.$request->name.'%');
        $count = $query->count();
        $data = $query->orderBy('created_at','desc')->paginate(10);
        
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
            'name' => $request->name,
            'data' => $data,
            'result' => true,
            ]);
    }

    //top画面⇒カテゴリ検索ボタン
    public function category(Request $request, Thread $thread){
        dd($thread->cates_name);
        $data = Thread::where('cates_name',$request->name)->orWhere('cates_name',$thread->cates_name)->paginate(10);
        $count = $data->count();
        // $cates = Thread::all();
        // dd(1);
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
            'name'=>$request->name,
            'data' => $data,
            'result'=>false,
            ]);
    }
    
}
