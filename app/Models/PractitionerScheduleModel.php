<?php
    namespace App\Models;

    class PractitionerScheduleModel extends \CodeIgniter\Model
    
    {
        public function __construct()
        {
            parent::__construct();
        }
        protected $table = 'PractitionerSchedule'; // Give the table name

        protected $allowedFields=['id', 'practitionerid', 'hospital', 'appointdate','appointtime','patientnum','fee'];

        protected $returnType = 'App\Entities\PractitioinerSchedule';

    }
?>