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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('prueba', function()
{
	echo view('welcome')->render();
});

Route::get('/', function()
{
	//Cache::forever( 'home', minify_html(view('welcome')->render())  );
	//$buf = preg_replace(array('/<!--(.*)-->/Uis',"/[[:blank:]]+/"),array('',' '),str_replace(array("\n","\r","\t"),'',view('welcome')->render()));
	//Cache::forever( 'cachekey', trim(view('welcome')->render())  );
	//return Cache::get( 'cachekey' );
	//return view('welcome');
	if (Cache::has('home')) {
	    return Cache::get( 'home' );
	}else{
		Cache::forever( 'home', minify_html(view('welcome')->render())  );
		return Cache::get( 'home' );
	}
});

Auth::routes();

Route::get('/home', 'HomeController@index');

