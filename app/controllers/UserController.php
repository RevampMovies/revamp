<?php 

class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile($user)
    {
		try { //cerca l'utente per username (class User)
			 $userprofile = User::findByUsernameOrFail($user);
		    }
			catch (Illuminate\Database\Eloquent\ModelNotFoundException $notfoundex) //catcha l'errore
			{
			 return Response::make(View::make('errors/404'), 404); //restituisce 404 page
			}
			
			
		     $profiledump = with(new gravatar)->getprofile($userprofile->email); //uso gravatar API (profilo)
		     $grav = with(new gravatar)->get($userprofile->email);  //uso gravatar API (avatar)
		     
		     //Film preferiti
		    $favfilms = DB::table('film')
						->join('favourites', 'film.IDFilm', '=', 'favourites.IDFilm')
						->where('IDUtente',$userprofile->id) 
						->select('favourites.IDFilm', 'film.IDCategoria', 'film.titolo', 'film.anno', 'film.poster')
						->get();
						
			 //Film da vedere
			 $watchlaterfilms = DB::table('film')
						->join('watchlater', 'film.IDFilm', '=', 'watchlater.IDFilm')
						->where('IDUtente',$userprofile->id) 
						->select('watchlater.IDFilm', 'film.IDCategoria', 'film.titolo', 'film.anno', 'film.poster')
						->get();
						
			if (Auth::check())
			{ 
				return View::make('user_profile')->with('usernick', $userprofile->username)->with('userimg', $grav)->with('profiledump', $profiledump)->with('films', $favfilms)->with('watchlater', $watchlaterfilms)->with('username', Auth::user()->username);
			} else {
				return View::make('user_profile')->with('usernick', $userprofile->username)->with('userimg', $grav)->with('profiledump', $profiledump)->with('films', $favfilms)->with('watchlater', $watchlaterfilms);
			}
    }
    
 

}

    /**
     * Classe per la gravatar API
     */

	class gravatar extends Eloquent {

		   public function get( $email, $s = 120, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
			$url = 'http://www.gravatar.com/avatar/';
			$url .= md5( strtolower( trim( $email ) ) );
			$url .= "?s=$s&d=$d&r=$r"; 
			if ( $img ) {
				$url = '<img src="' . $url . '"';
				foreach ( $atts as $key => $val )
					$url .= ' ' . $key . '="' . $val . '"';
				$url .= ' />';
			}
			return $url;
		}
		
		public function getprofile($email) {
			$emailmd5 = md5( strtolower( trim( $email ) ) );
			try {
			$str = file_get_contents( 'http://www.gravatar.com/'.$emailmd5.'.php' );
			} catch (ErrorException $ex)
			{
				$unknownprofile = array( "currentLocation" => "Sconosciuta",	"name" => array( "formatted" => $email) );
				return $unknownprofile;
			}
			$profile = unserialize( $str );
			$returned = array();
			if ( is_array( $profile ) && isset( $profile['entry'] ) ) {
				if (isset($profile['entry'][0]['currentLocation']))
					$returned['currentLocation'] = $profile['entry'][0]['currentLocation'];
				else
					$returned['currentLocation'] = "Sconosciuta";
					
				if (isset($profile["entry"][0]["name"]["formatted"]))
					$returned['name'] = $profile["entry"][0]["name"]["formatted"];
				else if (isset($profile['entry'][0]['preferredUsername']))
					$returned['name'] = $profile['entry'][0]['preferredUsername'];
				else
					$returned['name'] = $email;
					
				if (isset($profile['entry'][0]['accounts'][0]['url']))
					$returned['url'] = $profile['entry'][0]['accounts'][0]['url'];
				if (isset($profile['entry'][0]['accounts'][0]['shortname']))
					$returned['shortname'] = $profile['entry'][0]['accounts'][0]['shortname'];

					
					return $returned;
			} else	
					return array( "currentLocation" => "Sconosciuta",	"name" => array( "formatted" => $email) );
	 
	}

}
