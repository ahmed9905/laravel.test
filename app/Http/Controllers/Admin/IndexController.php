<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show(){

    	$array = ['title'=>'moebel','date'=>[
    		'one'=>'List 1',
    		'two'=>'List 2',
    		'three'=>'list 3'
    		],
    		'bvar'=>true,
    		'script'=>"<script>alert('hello')</script>",
    		'dataI'=>['List 1','List 2','List 3']
    	];

    	if (view()->exists('default.index')) {
    		return view('default.index',$array);
    	}
    	
    	abort(404);
    	
    }
}
