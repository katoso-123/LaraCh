<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Cate;
use App\Thread;

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
        return view('top')->with('cates',$Cates);
    }
}
