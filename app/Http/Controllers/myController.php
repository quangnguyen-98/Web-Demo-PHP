<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    //
    public function xinChao(){
    	echo "xin chào !";
    }
    public function khoaHoc($ten){
    	echo "chào bạn " .$ten." !";
    }
}
