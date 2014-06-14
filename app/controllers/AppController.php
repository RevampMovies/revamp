<?php

class AppController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Web App Controller
	|--------------------------------------------------------------------------
	*/

	public function getfilm($idfilm)
	{
		
		$film = DB::table('film')->where('IDFilm', $idfilm)->first();
		if (!is_null($film))
		{
			return Response::json(array('IDCategoria' => $film->IDCategoria, 
										'durata' => $film->durata,
										'titolo' => $film->titolo,
										'poster' => $film->poster,
										'anno' => substr($film->anno, 0, 4),
										'descrizione' => $film->descrizione,
										'link' => $film->link
										));
		} else return Response::json(array('error' => 'Id non presente!'), 500);
		
	}
	
	public function search()
	{
		if (Input::has('title'))
			{
				$title = Input::get('title');
				//search by title
				$res = DB::table('film')->where('titolo', 'LIKE', '%'.$title.'%')->get();
				if (!empty($res))
					{ //There are results
						if (Auth::check())
						{
							return View::make('index')->with('films', $res)->with('username', Auth::user()->username);
						} else {
							return View::make('index')->with('films', $res);
						}	
					}
				else
					{ //No results
					  if (Auth::check())
						{
							return View::make('index')->with('username', Auth::user()->username);
						} else {
							return View::make('index');
						}				
					}
			} else return "Something went wrong!";
		
		
	}

}
