<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadController extends Controller
{
    //top画面⇒新規スレッド作成ボタン
    public function create(){
        return view('new_thread_create');
    }

    //thread画面⇒投稿ボタン
    public function res(){
        return view('thread');
    }

    //new_thread_create画面⇒作成ボタン
    public function new(){
        return view('thread');
    }

    //search画面⇒続きを読むボタン
    public function read(){
        return view('thread');
    }


}
