<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Thread;

class ThreadController extends Controller
{
    //top画面⇒新規スレッド作成ボタン
    public function create(){
        $cates = Cate::all();
        return view('new_thread_create', ['cates'=>$cates]);
    }

    //thread画面⇒投稿ボタン
    public function res(){
        return view('thread');
    }

    //new_thread_create画面⇒作成ボタン
    public function new(){
        //Threadのmodelクラスのインスタンスを作成
        $thread = new Thread();

        //データベースに値をinsert
        $thread->create([
            'threads_id' => uniqid(),
            'title' => GET_['title'],
            'created_at' => new DateTime(),
            'cates_id' => GET_['cate'],
        ]);


        return view('thread');
    }

    //search画面⇒続きを読むボタン
    public function read(){
        return view('thread');
    }


}
