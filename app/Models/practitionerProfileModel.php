<?php
    namespace App\Models;

    class practitionerProfileModel extends \CodeIgniter\Model
    
    {
        public function __construct()
        {
            parent::__construct();
        }
        protected $table = 'PractitionerProfile'; // Give the table name

        protected $allowedFields=['id','specification', 'qualification', 'practitionerid','fullname'];

        protected $returnType = 'App\Entities\PractitionerProfile';

    }
?>