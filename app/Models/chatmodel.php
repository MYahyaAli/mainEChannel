<?php
    namespace App\Models;

    class chatmodel extends \CodeIgniter\Model
    
    {
        public function __construct()
        {
            parent::__construct();
        }
        protected $table = 'Chatmessage'; // Give the table name

        protected $allowedFields=[''];

        protected $returnType = 'App\Entities\Chat';

    }
?>