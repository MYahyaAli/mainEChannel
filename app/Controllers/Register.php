<?php

namespace App\Controllers;


class Register extends BaseController
{

    public function index()
    {
        return view('Register.php');  
    }

    
    public function create() 
    {
        $form = $this->request->getPost(); // Gets data from the registration form's post method
        // $validation =  \Config\Services::validation(); // Validation library is loaded
            
            // get the data from the form
            $email = $this->request->getPost('email');
            $model = new \App\Models\userModel;

            $users = new \App\Entities\User ($this -> request ->getPost());
            $users -> password = password_hash($users->password, PASSWORD_DEFAULT); // Hashes the password

            $image = $this->request->getFile('image');
            if ($image->isValid() && !$image->hasMoved()) {
                $imgName= $image->getRandomName();
                $image->move('uploads/',$imgName);
            }
            else{
                    echo '
                    <div class="alert2 text-danger">
                        <strong> ERROR! </strong>
                        Registeration was not successful! Check your entries! Check Image Upload!
                    </div>';
                    
                    return view("Register");
            }
            

            // $file = $this->request->getFile('upload');
            // if ($file->isValid() && !$file->hasMoved()) {
            //     $fileName= $image->getRandomName();
            //     $file->move('uploads/DoctorDocs',$fileName);
            // }
            // else{
            //         echo '
            //         <div class="alert2 text-danger">
            //             <strong> ERROR! </strong>
            //             Registeration was not successful! Check your entries! Check Document!
            //         </div>';
                    
            //         return view("Register");
            // }

            
            $model->insert($users);

            return view('Login');

            ////////   Setting up the practitioner account profile   ////////

                        // get account type
                        $account_type = $this->request->getPost('type');
                        
                        // check if account type is company, creates a blank profile for it
                        if($account_type == "Practitioner") {
                            
                            // gets data on the just entered company
                            $query1 = $model -> query("SELECT * FROM user WHERE email = '$email'"); 
                            $row = $query1 -> getRow();

                            $modelPrac= new \App\Models\userModel;

                            // Gets and uploads information to the profile database
                            $model2 = $modelPrac -> save([
                                'specification' => '',
                                'qualification' => '',
                            ]);

                        }
                        else{
                                echo '
                                <div class="alert2 text-danger">
                                    <strong> ERROR! </strong>
                                    Registeration was not successful! Check your entries!
                                </div>';
                                
                                return view("Register");
                        }

    }
}