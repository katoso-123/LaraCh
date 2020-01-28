<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //top画面⇒word検索ボタン
    public function word(){
        return view('search');
    }

    //top画面⇒カテゴリ検索ボタン
    public function category(){
        return view('search');
    }

    //search画面⇒ページャー
    public function pager(){
        return view('search');
    }
}
