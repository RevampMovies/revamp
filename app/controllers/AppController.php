<?php

class AppController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Web App Controller
	|--------------------------------------------------------------------------
	*/
	
	//Get single film info  (detailed-info)
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
										'link' => $film->link,
                                        'IDRegisti' => $film->IDRegisti,
                                        'health' => $film->health                       
										));
		} else return Response::json(array('error' => 'Id non presente!'), 500);
		
	}
	
	// Search function
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
	
	//Set favourite
	public function setFav($idfilm) {
		if (Auth::check())
		{ 	
			$idfilm = array('idfilm' => $idfilm);
			$userid = Auth::id();
			$rules = array('idfilm' => 'exists:film,IDFilm');
			$validator = Validator::make($idfilm, $rules);
				if($validator->passes())
				{
					try {
					$query = DB::table('favourites')->insert(array('IDUtente' => $userid, 'IDFilm' => $idfilm['idfilm']));
					} catch (Illuminate\Database\QueryException $ex) {
						return Response::json(array('error' => 'Già aggiunto ai preferiti'), 500);
					}
					return Response::json(array('success' => 'Aggiunto'), 200);
				}
				return Response::json(array('error' => 'ID film non presente!'), 500);
			
		} else 
			return Response::json(array('error' => 'Non sei loggato!'), 401);
	}
	
	//Stream feed handler
	public function stream($last) { 	
						try { //Salta $last posizioni, restituisce 8 films nel feed
						$query = DB::table('film')->skip($last)->take(8)->select('IDFilm', 'IDCategoria', 'titolo', 'poster', 'anno')->get();
						} catch (Illuminate\Database\QueryException $ex) {
							return Response::json(array('error' => 'Qualcosa è andato storto!'), 500);
						}
						return Response::json($query);			
		}
    
    //Set watchlater
    public function setWatchLater($idfilm) {
		if (Auth::check())
		{ 	
			$idfilm = array('idfilm' => $idfilm);
			$userid = Auth::id();
			$rules = array('idfilm' => 'exists:film,IDFilm');
			$validator = Validator::make($idfilm, $rules);
				if($validator->passes())
				{
					try {
					$query = DB::table('watchlater')->insert(array('IDUtente' => $userid, 'IDFilm' => $idfilm['idfilm']));
					} catch (Illuminate\Database\QueryException $ex) {
						return Response::json(array('error' => 'Già aggiunto alla Watchlist'), 500);
					}
					return Response::json(array('success' => 'Aggiunto'), 200);
				}
				return Response::json(array('error' => 'ID film non presente!'), 500);
			
		} else 
			return Response::json(array('error' => 'Non sei loggato!'), 401);
	}

}
