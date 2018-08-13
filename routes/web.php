<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index')->with('description', 'Moderna - Главная страница')
                        ->with('title', 'Moderna - Главная страница');
});

Route::get('/{page}', function ($page) {
    $data = array('description' => 'Moderna - ' . $page, 
                  'title' => 'Moderna - ' . $page);
    return view($page, $data);
});*/

Route::get('/', 'MainController@index');
Route::get('/pricingbox', 'PriceController@index');
Route::get('/portfolio', 'PortfolioController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/contact', 'ContactController@index');

Route::post('/sendmail', 'ContactController@send');