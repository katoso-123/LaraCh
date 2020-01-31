<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Cate;
use App\Thread;
use App\Res;

class TopController extends Controller
{
    //layout⇒top画面
    public function top(){
        $Cates = Cate::all();
        foreach($Cates as $cate){
            //レス数取得処理
            $thread = Thread::where('cates_name', $cate->cates_name);
            $cate->thread_count = $thread->count();
        }

        $query = Thread::query();
        $threads = $query->orderBy('res_count','desc')->get()->take(3);
        // foreach($threads as $item){
        //     $query = Res::query();
        //     $data = $query->where('threads_id',$item->threads_id)->orderBy('created_at','desc')->get();
        //     $item->ress = $data->take(2);
        // }
        // dd($threads);

        return view('top')->with([
            'cates' => $Cates,
            'threads' => $threads,
            ]);
    }
}
