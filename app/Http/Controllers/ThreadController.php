<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cate;
use App\Thread;
use App\Res;

class ThreadController extends Controller
{
    //top画面⇒新規スレッド作成ボタン
    public function create(){
        $cates = Cate::all();
        return view('new_thread_create', ['cates'=>$cates]);
    }

    //new_thread_create画面⇒作成ボタン
    public function new(Request $request){
        
        //データベースに値をinsert
        $thread = Thread::create([
            'threads_id' => uniqid(),
            'title' => $request -> title,
            'cates_name' => $request -> cate,
        ]);

        return view('thread')->with([
            'thread' => $thread,
            ]);
    }

    //thread画面⇒投稿ボタン
    public function res(Request $request){

        //データベースに値をinsert
        $res = Res::create([
            'res_id' => uniqid(),
            'threads_id' => 'aaa',
            'body' => $request -> body,
        ]);
        
        return view('thread');
    }
    
    //search画面⇒続きを読むボタン
    public function read(){
        return view('thread');
    }

}
