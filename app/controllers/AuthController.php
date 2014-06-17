<?php
 
class AuthController extends BaseController {
 
    //LOGIN
     public function postLogin()
    {
		
        // Input
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        
 
        // validation.
        $rules = array(
            'username'  => 'Required',
            'password'  => 'Required'
        );
 
        // Validate the inputs.
        $validator = Validator::make($userdata, $rules);
 
        // Check if the form validates with success.
        if ($validator->passes())
        {
            // rimuovo username
           // unset($userdata['username']);
 

			// Here's the fact:
			// A causa di php su questo server che ha una versione 5.3.3-7 (laravel necessita <= 5.3.7)
			// non è possibile utilizzare correttamente mcrypt. Ergo si provvede a usare sha1 ed eseguire 
			// il login con un workaround. Si è provato ad usare https://github.com/robclancy/laravel4-hashing
			// per cambiare Bcrypt con SHA512, ma portava alcuni problemi (Unsupported Password Hash Supplied)
			// !! Attenzione: - criptatura debole (sha1).
			//                - TODO salted hash
           // Tentativo login
            //if (Auth::attempt($userdata)) // usare questo se con php 5.3.7 && MCrypt
            
            $user = DB::table('users')->where('username',$userdata['username'])->where('password',sha1($userdata['password']))->first();
            
           if (!empty($user))
            {
				Auth::loginUsingId($user->id);
                // JSON successo 
                return Response::json(array('success' => 'You have logged in successfully', 'username' => Input::get('username')));
            }
            else
            {
				return Response::json(array('error' => 'Wrong password!', 'username' => Input::get('username')), 401);
                // Redirect login
                // return Redirect::to('login')->withErrors(array('password' => 'Password invalid'))->withInput(Input::except('password'));
            }
        }
 
        // Errore
        return Response::json(array('error' => 'Wrong password!', 'username' => Input::get('username')), 401);
               
    }
    
    
    //LOGOUT
	public function getLogout()
	 {
		 // Log out
		 Auth::logout();
	 
		 // Redirect
		 return Redirect::to('/');
	 }
    
    //REGISTRATION
    public function registration()
    {
			// Fetch all request data.
			$data = Input::all();
			
			// Build the validation constraint set.
			$rules = array(
				'username'   => 'required|alpha_num|min:3|max:32|unique:users',
				'email'      => 'required|email|unique:users',
				'password'   => 'required|min:5'
			);

			// Create a new validator instance.
			$validator = Validator::make($data, $rules);

			if ($validator->passes()) {
				unset($data["check"]);
				// Adding data
				$data["password"] = sha1($data["password"]);
				$data["role"] = "User";
				$data["created_at"] = date("Y-m-d H:i:s");
			    $data["updated_at"] = date("Y-m-d H:i:s");
			    //Saving
				Register::saveFormData($data);
				$loginu = User::findByUsernameOrFail(Input::get('username'));
				Auth::login($loginu);
				return Response::json(array('success' => 'You have registered successfully', 'username' => Input::get('username')));
			}

			return Response::json(array('error' => 'Something is wrong!', 'username' => Input::get('username')), 401);
				
	}
    
    
        //public function showLogin()
    //{
        //// Check
        //if (Auth::check())
        //{
            //// Redirect, è già autenticato
            //return Response::json(array('success' => 'Sei già loggato')); // Redirect::to('/')->with('success', 'Sei Già Loggato');
        //}
 
        //// Devi autenticarti
        //return Response::json(array('success' => 'Sei già loggato')); //View::make('auth/login');
    //}
    
    
}
