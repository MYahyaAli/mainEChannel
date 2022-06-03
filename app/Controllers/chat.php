<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Validation\Rules;

class Chat extends BaseController {

    public function __construct()
    {
        helper(['form','url']);
    }

 public function sendemail()
    {
        $inputs= $this->validate(
            [
                'senderemail'=> [
                    'label'=> ' SenderE=mail',
                    'rules'=>'required|valid_email',
                    'errors'=>[
                        'required'=>'Please enter your email address',
                        'valid_email'=>'Please enter valid email address']
                    ],
                'recieveremail'=> [
                    'label'=> 'RecieverE=mail',
                    'rules'=>'required|valid_email',
                    'errors'=>[
                        'required'=>'Please enter your email address',
                        'valid_email'=>'Please enter valid email address']
                    ],
                'subject'=>[
                    'label'=> 'Subject',
                    'rules'=>'required|min_length[5]',
                    'errors'=>[
                        'required'=>'Please enter subject',
                        'min_length'=>'Please enter minimum 5 character for the subject']
                    ],
                'message'=>[
                    'label'=> 'Message',
                    'rules'=>'required|min_length[5]',
                    'errors'=>[
                        'required'=>'Please enter message',
                        'min_length'=>'Please enter minimum 5 character for the message']
                    ],
                'file'=>[
                    'label'=> 'File',
                    'rules'=>'uploaded[file]|max_size[file,1024]|mime_in[file,image/jpg,image/jpeg,image/png,application/pdf]',
                    'errors'=>[
                        'uploaded'=>'Please select a file',
                        'max_size'=>'The file size is too big',
                        'mime_in'=>'The file type is not allowed']
                    ],
            ]);

            if (!$inputs) {
                return view('Practitoner/prac_dashboard');
            }
            else {
                $senderemail= $this->request->getPost('senderemail');
                $recieveremail= $this->request->getPost('recieveremail');
                $subject= $this->request->getPost('subject');
                $message= $this->request->getPost('message');
                $file= $this->request->getPost('file');


                $fileName = $file->getName();
                $file->move('reports',$fileName);
                $filePath ='reports/'. $fileName;
                
                
                $mail= \Config\Services::email();
                $mail->setFrom($senderemail);
                $mail->setTo($recieveremail);
                $mail->setSubject($subject);
                $mail->setMessage($message);
                $mail->attach($filePath,'attachment',$fileName);
                
                if($mail->send()){
                    session()->setFlashdata('success','Your message has been sent successfully.');
                    return redirect()->to('Home/home');
                }else {
                    session()->setFlashdata('error','Sorry, email could not be sent!');
                    return redirect()->to('Home/home');
                }
            }
    }
}
?>