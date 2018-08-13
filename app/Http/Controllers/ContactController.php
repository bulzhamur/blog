<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
	public function index()
	{
	    $data = [
	        'title' => 'Наши контакты',
	        'description' => 'Наша компания - самая лучшая в своём роде'
	    ];
	         
	    return view('contact', $data);
	}
	
	public function send(Request $request)
    {
        dd($request->all());
    }
}
