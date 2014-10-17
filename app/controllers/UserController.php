<?php

class UserController extends Controller {
    
#-------------------------------------------------------------------------------
   public function userRegister(){
        return "User register";
        
    }
#------------------------------------------------------------------------------
    public function registrationCreate(){
        return "User Create";
        
    }
#-------------------------Show Login Form---------------------------------------
    public function showLogin(){
        return View::make('registration/login');
    }

#-------------------------------------------------------------------------------
    public function doLogin(){

       $rules = array(
                        'email'    => 'required|email', 
                        'password' => 'required|alphaNum|min:3' 
                    );


        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
            return Redirect::to('login')
                             ->withErrors($validator) // send back all errors to the login form
                             ->withInput(Input::except('pssword')); // send back the input (not the password) so that we can repopulate the form
        }else{

                $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password'));

                if (Auth::attempt($userdata)) {

                    echo 'SUCCESS!';
                } else {	

                    return Redirect::to('login');

                }

        }
    }
    public function doLogout(){
        Auth::logout(); 
        return Redirect::to('login'); // redirect the user to the login screen
    }

}
