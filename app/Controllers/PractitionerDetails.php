<?php

namespace App\Controllers;

class PractitionerDetails extends BaseController
{
    public function index()
    {
        return view('Practitoner/PractitionerDetails');
    }

    public function create(){

        // $form = $this->request->getPost();
        // $did =$this->request->getPost('practitionerid'); 9

        $profile = new \App\Entities\PractitionerProfile ($this -> request ->getPost());

        $model = new \App\Models\PractitionerProfileModel;
        // $file = $this->request->getFile('myfile');
        //     if ($file ->isValid() && !$file ->hasMoved()) 
        //     {
        //         $fileName= $file->getRandomName();
        //         $file->move('uploads/DocCertificates',$fileName);
        //     }
 
        // $data=[
        //     'fullname' =>$this->request->getPost('fullname'),
        //     'specification' =>$this->request->getPost('specification'),
        //     'qualification' =>$this->request->getPost('qualification'),
        //     'practitionerid' =>$this->request->getPost('practitionerid'),
        //     'image' =>$fileName,
        // ];

        // $model->save($data);

        $model->insert($profile);

        echo '
        <div class="alert2 text-success text-center">
            <strong> SUCCESS ! </strong>
            Wait for Admin Approval to <strong> Access </strong> the complete system.
            Data added successfully! <br>
        </div>';
        
        return view('Our_Practitioners');
    }

}
