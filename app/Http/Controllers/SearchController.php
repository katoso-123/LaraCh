<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WordRequest;

class SearchController extends Controller
{
    //top画面⇒word検索ボタン
    public function word(WordRequest $request){
        // dd($request->word);
        return view('search')->with([
            'word' => $request->word,
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
