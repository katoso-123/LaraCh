<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WordRequest;
use App\Thread;

class SearchController extends Controller
{
    //top画面⇒word検索ボタン
    public function word(WordRequest $request){
        // dd($request->word);
        // $threads = Thread::all();
        $query = Thread::query();
        $query->where('title','like','%'.$request->word.'%');
        $data = $query->orderBy('created_at','desc')->paginate(10);

        return view('search')->with([
            'word' => $request->word,
            'data' => $data,
            'result' => true,
            ]);
    }

    //top画面⇒カテゴリ検索ボタン
    public function category(Request $request){

        // dd($request->category);
        return view('search')->with([
            'category'=>$request->category,
            'result'=>false,
            ]);
    }

    //search画面⇒ページャー
    public function pager(){
        return view('search');
    }
}
