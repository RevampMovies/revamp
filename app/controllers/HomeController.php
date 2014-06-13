<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		$films = DB::table('film')->take(24)->remember(15)->get();
		if (!is_null($films))
		{
			if (Auth::check())
			{
				return View::make('index')->with('films', $films)->with('username', Auth::user()->username);
			} else {
				return View::make('index')->with('films', $films);
			}	
		} else return "Errore; nessun film presente? :(";
			
	}

}
