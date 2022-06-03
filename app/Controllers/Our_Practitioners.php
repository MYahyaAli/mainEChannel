<?php

namespace App\Controllers;

class Our_Practitioners extends BaseController
{
    public function index()
    {
        $model= new \App\Models\userModel;

        $user = $model;

            $session = session();
            $session->set('ProfileID', $user -> id);
            $session->set('Specs', $user -> specification);
            $session->set('Qualify', $user -> qualification);
            $session->set('fname', $user -> firstname);
            $session->set('lname', $user -> lastname);

        return view('Our_Practitioners');
    }
}