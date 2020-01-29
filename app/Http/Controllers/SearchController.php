<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //top画面⇒word検索ボタン
    public function word(Request $request){
        // dd($request->word);
        return view('search')->with('result', true);
    }

    //top画面⇒カテゴリ検索ボタン
    public function category(){
        return view('search')->with('result', false);
    }

    //search画面⇒ページャー
    public function pager(){
        return view('search');
    }
}
