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
		//Prende i primi 15 film nel database e mette in cache il risultato della query per 15 minuti 
		//(guadagno prestazioni)
		$films = DB::table('film')->take(37)->remember(10)->get();
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
