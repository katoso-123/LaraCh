<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WordRequest;
use App\Thread;
use App\Cate;

class SearchController extends Controller
{
    //top画面⇒word検索ボタン
    public function word(WordRequest $request){

        $query = Thread::query();
        $query->where('title','like','%'.$request->name.'%');
        $count = $query->count();
        $data = $query->orderBy('created_at','desc')->paginate(10);

        return view('search')->with([
            'count' => $count,
            'name' => $request->name,
            'data' => $data,
            'result' => true,
            ]);
    }

    //top画面⇒カテゴリ検索ボタン
    public function category(Request $request){

        $data = Thread::where('cates_name',$request->name)->paginate(10);
        $count = $data->count();
        // $cates = Thread::all();
        // dd(1);


        return view('search')->with([
            'count' => $count,
            'name'=>$request->name,
            'data' => $data,
            'result'=>false,
            ]);
    }

    public function category2(){

        $data = Thread::where('cates_name',$request->name)->paginate(10);
        $count = $data->count();
        // $cates = Thread::all();
        // dd(1);


        return view('search')->with([
            'count' => $count,
            'name'=>$request->name,
            'data' => $data,
            'result'=>false,
            ]);
    }


    //search画面⇒ページャー
    public function pager(){
        return view('search');
    }
}
