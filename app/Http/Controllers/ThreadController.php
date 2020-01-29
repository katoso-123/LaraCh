<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cate;
use App\Thread;
use Carbon\Carbon;

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
    public function new(Request $request){
        //Threadのmodelクラスのインスタンスを作成
        $thread = new Thread();

        //データベースに値をinsert
        $thread->create([
            'threads_id' => uniqid(),
            'title' => $request -> title,
            'cates_name' => $request -> cate,
        ]);

        return view('thread')->with([
            'title' => $request -> title,
            'created_at' =>  DB::table('threads')->where('title', $request -> title)->pluck('created_at'),
            'cates_name' => $request -> cate,
            ]);
    }

    //search画面⇒続きを読むボタン
    public function read(){
        return view('thread');
    }

}
