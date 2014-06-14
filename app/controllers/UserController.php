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
		    
			if (Auth::check())
			{ 
				return View::make('user_profile')->with('usernick', $userprofile->username)->with('userimg', $grav)->with('profiledump', $profiledump)->with('username', Auth::user()->username);
			} else {
				return View::make('user_profile')->with('usernick', $userprofile->username)->with('userimg', $grav)->with('profiledump', $profiledump);
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
				$unknownprofile = [
					"currentLocation" => "Sconosciuta",
					"name" => ["formatted" => $email] //  "accounts" => [0 => ["shortname"=>"?","url"=>"?"]]
				];
				return $unknownprofile;
			}
			$profile = unserialize( $str );
			if ( is_array( $profile ) && isset( $profile['entry'] ) )
				return $profile['entry'][0]; //['displayName'];
	 
	}

}
