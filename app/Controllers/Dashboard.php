<?php

namespace App\Controllers;

use CodeIgniter\Validation\Validation;

class Dashboard extends BaseController
{
    public function prac()
    {
        return view('Practitoner/prac_dashboard');

        

    }

    public function pat()
    {
        return view ('Patient/pat_dashboard',[
            'validation'=>$this->validator
        ]);
    }

}
