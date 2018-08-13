<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index()
	{
	    $data = [
	        'title' => 'Портфолио',
	        'description' => 'Наши работы'
	    ];
	         
	    return view('portfolio', $data);
	}
}
