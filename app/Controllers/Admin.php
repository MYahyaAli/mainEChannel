<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/admin_dashboard');
    }

    public function approval()
    {
      return view('Admin/userapproval');
    }

    public function approveuser($id)
    {
        // Gets the database
      $model = new \App\Models\userModel;
      $model -> query("UPDATE user SET approved = 'Yes' WHERE id = $id"); // Changes approval

      return view('Admin/userapproval'); // refresh page  
    }
    
    public function deleteuser($id)
    {
        $model = new \App\Models\userModel;
        $model->delete($id);

      return view('Admin/userapproval'); //refresh page
    }
}
