<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    /*protected $request;

    public function __construct (Request $request)
    {
    	$this->request = $request;
    }
*/


    public function show (Request $request,$id=FALSE)
    {

    	//print_r($request->all());

    	//print_r($request->only('text'));

    	//print_r($request->except(['text']));

    	//echo '<h1 style ="margin-top:100px">'.$request->name.'</h1>';
    	
    	/*if ($request->is('contact/*')) {
    		echo '<h1 style ="margin-top:100px">'.$request->path().'</h1>';
    	}*/
    	//echo '<h1 style ="margin-top:100px">'.$request->url().'</h1>';
    	//echo '<h1 style ="margin-top:100px">'.$request->fullUrl().'</h1>';
    	/*if ($request->has('name')) {
    		echo '<h1 style ="margin-top:100px">'.$request->input('name','Default').'</h1>';
    	}*/
    	//echo '<h1 style ="margin-top:100px">'.$request->method().'</h1>';
    	if ($request->isMethod('post')) {
    		////

    		// valid
    		//print_r($_SESSION);
    		//$request->flash();
    		//$request->flashOnly('name');
    		//$request->flashExcept('name');
    		return redirect()->route('contact')->withInput();
    		///

    		//echo '<h1 style ="margin-top:100px">'.$request->method().'</h1>';
    	}
    	if (view()->exists('default.contact')) {
    		return view('default.contact',['title'=>'Contacts']);
    	}
    }

}
