<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
 	public function index()
	{
	    $data = [
	        'title' => 'Блог',
	        'description' => 'Наша компания - самая лучшая в своём роде'
	    ];
	         
	    return view('blog', $data);
	}    
}
