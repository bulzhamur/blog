<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    //
 	public function index()
	{
	    $data = [
	        'title' => 'Price',
	        'description' => 'Наша компания - самая лучшая в своём роде'
	    ];
	         
	    return view('pricingbox', $data);
	}
}
