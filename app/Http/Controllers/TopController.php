<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    //layout⇒top画面
    public function top(){
        return view('top');
    }
}
