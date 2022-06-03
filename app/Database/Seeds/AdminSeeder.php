<?php

    namespace App\Database\Seeds;
    use CodeIgniter\Database\Seeder;

    class AdminSeeder extends Seeder
    {
        public function run()
        {

            // Seeder file creates dummy data for the database when run.

            $data = [
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'email' => 'admin123@admin.com',
                'password' => password_hash('Admin@123', PASSWORD_DEFAULT),
                'phone'=>'0775974661',
                'nic'=>'200012334567',
                'address'=>'78 Bangalagedara Kandy',
                'type' => 'Admin',
                'approved' => 'Yes'
            ];

            $this->db->table('User')->insert($data);
        }
        
    }

?>