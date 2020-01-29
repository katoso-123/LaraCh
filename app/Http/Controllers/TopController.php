<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Cate;

class TopController extends Controller
{
    //layout⇒top画面
    public function top(){
        $Cates = Cate::all();   
        // $Cates = DB::table('cates')->get();
        return view('top')->with('cates', $Cates);
    }
}
