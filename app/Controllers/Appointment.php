<?php

namespace App\Controllers;

class Appointment extends BaseController
{
    public function index()
    {
        return view('Practitioner/prac_dashboard');
    }

    public function create()
    {

		$model= new \App\Models\PractitionerScheduleModel;

		$users = new \App\Entities\PractitionerSchedule ($this -> request ->getPost());

		$model->insert($users);
		
        			// CREATING THE SESSION AND RETRIVING USER INFO INTO IT
			$session = session(); // initialize the session

			$session->set('AppointmentID', $users -> id); 
			$session->set('DoctorID', $users -> practitionerid); 
			$session->set('Hospital', $users -> hospital); 
			$session->set('Appointment Date', $users -> appointdat); 
			$session->set('Appointment Time', $users -> appointtime);
			$session->set('Number of Patients', $users -> patientnum);
			$session->set('Fees', $users -> fee);
		
			
		return view('Practitoner/prac_dashboard');
    }

	public function appoint(){
		
		$model= new \App\Models\userModel;

        $user = $model;

            $session = session();
            $session->set('ProfileID', $user -> id);
            $session->set('Specs', $user -> specification);
            $session->set('Qualify', $user -> qualification);
            $session->set('fname', $user -> firstname);
            $session->set('lname', $user -> lastname);

		return view('Patient/Appoint_now');
	}

	public function book(){
		echo '
		<div class="container text-center">
		<div class="alert2 text-success">
          	<strong> Success! </strong> Your consultation is successfuly booked.!
         </div>
		 </div>';
                                
            return view("Our_Practitioners");

	}
	
}
