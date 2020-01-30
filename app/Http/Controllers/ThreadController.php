<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ThreadRequest;
use App\Http\Requests\ResRequest;
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
    public function new(ThreadRequest $request){
        
        //データベースに値をinsert
        $thread = Thread::create([
            'threads_id' => uniqid(),
            'title' => $request -> title,
            'cates_name' => $request -> cate,
        ]);

        $res = Res::create([
            'res_id' => uniqid(),
            'threads_id' => $thread->threads_id,
            'body' => $request->body,
            'name' => "スレ主",
        ]);

        $ress = Res::where('threads_id',$thread -> threads_id)->get(); 

        $number = 0;
        return view('thread')->with([
            'thread' => $thread,
            'ress' => $ress,
            'number' => $number,
            ]);
    }

    //thread画面⇒投稿ボタン
    public function res(ResRequest $request, Thread $thread){

        if(isset($request->name)){
            $name = $request->name;
        }else{
            $name = "名無し";
        }

        //データベースに値をinsert
        $res = Res::create([
            'res_id' => uniqid(),
            'threads_id' => $thread -> threads_id,
            'body' => $request -> body,
            'name' => $name,
        ]);
        
        $ress = Res::where('threads_id',$thread -> threads_id)->get(); 
        $number = 0;

        return view('thread')->with([
            'thread' => $thread,
            'ress' => $ress,
            'number' => $number,
        ]);
    }
    
    //search画面⇒続きを読むボタン
    public function read(Thread $thread){
        // dd($thread->threads_id);
        $ress = Res::where('threads_id', $thread->threads_id)->get();
        $number = 0;

        return view('thread')->with([
            'thread' => $thread,
            'ress' => $ress,
            'number' => $number,
        ]);
    }

}
