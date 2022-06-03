<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function index()
    {
        return view('Login');  
    }
    
	// public function Pracindex()
    // {
    //     return view('LoginPrac');  
    // }
  
    public function create()
    {
		$modelPrac = new \App\Models\userModel; // Gets the database for practitioners
		
		 // Gets the email and password values from the form
		$email = $this->request->getPost('email'); 
		$password = $this->request->getPost('password');

        $user = $modelPrac->where('email', $email) -> first();
        //checcks if user exists and  if relavant password matches 
		if ($user !== null && password_verify($password, $user->password)) {
			// If login was successful
	
			// // CREATING THE SESSION AND SAVING USER INFO INTO IT
			$session = session(); // initialize the session

			$session->set('UserID', $user -> id); 
			$session->set('First Name', $user -> firstname); 
			$session->set('Last Name', $user -> lastname); 
			$session->set('Email', $user -> email); 
			$session->set('Phone', $user -> phone);
			$session->set('NIC', $user -> nic);
			$session->set('address', $user -> address);
			$session->set('type', $user -> type);

            
            return view('Home');
		}
		else {

			// 	// Display error if login failed
				echo '<div class="alert2 text-danger text-center">
				<strong> ERROR! </strong> Login was not successful! Please double check your entries, or User does not exist!
				</div>';
				
				return view("login");
	
			}


    }
    
	// public function Patcreate()
    // {
	// 	$modelPat = new \App\Models\patient_model; // Gets the database for practitioners
		
	// 	 // Gets the email and password values from the form
	// 	$email = $this->request->getPost('email'); 
	// 	$password = $this->request->getPost('password');

    //     $user = $modelPat->where('email', $email) -> first();
    //     //checcks if user exists and  if relavant password matches 
	// 	if ($user !== null && password_verify($password, $user->password)) {
	// 		// If login was successful
	
	// 		// // CREATING THE SESSION AND SAVING USER INFO INTO IT
	// 		$session = session(); // initialize the session

	// 		$session->set('UserID', $user -> id); 
	// 		$session->set('First Name', $user -> firstname); 
	// 		$session->set('Last Name', $user -> lastname); 
	// 		$session->set('Email', $user -> email); 
	// 		$session->set('Phone', $user -> phone);
	// 		$session->set('NIC', $user -> nic);
			
    //         return view('Home');
	// 	}
	// 	else {

	// 		// 	// Display error if login failed
	// 			echo '<div class="alert2">
	// 			<strong> ERROR! </strong> Login was not successful! Please double check your entries, or User does not exist!
	// 			</div>';
				
	// 			return view("login");
	
	// 		}


    // }

	// public function Admincreate()
    // {
	// 	$model = new \App\Models\admin_model; // Gets the database for practitioners
		
	// 	 // Gets the email and password values from the form
	// 	$email = $this->request->getPost('email'); 
	// 	$password = $this->request->getPost('password');

    //     $user = $model->where('email', $email) -> first();
    //     //checcks if user exists and  if relavant password matches 
	// 	if ($user !== null && password_verify($password, $user->password)) {
	// 		// If login was successful
	
	// 		// // CREATING THE SESSION AND SAVING USER INFO INTO IT
	// 		$session = session(); // initialize the session

	// 		$session->set('UserID', $user -> id); 
	// 		$session->set('First Name', $user -> firstname); 
	// 		$session->set('Last Name', $user -> lastname); 
	// 		$session->set('Email', $user -> email);
			
    //         return view('Admin/admin_dashboard');
	// 	}
	// 	else {

	// 		// 	// Display error if login failed
	// 			echo '<div class="alert2">
	// 			<strong> ERROR! </strong> Login was not successful! Please double check your entries, or User does not exist!
	// 			</div>';
				
	// 			return view("login");
	
	// 		}


    // }
}