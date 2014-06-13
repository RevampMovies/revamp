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

}
