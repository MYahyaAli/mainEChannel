<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'firstname'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'lastname'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'email'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
                'unique'=>true
            ],
            'password'=>[
                'type'=>'VARCHAR',
                'constraint'=>60
            ],
            'phone'=>[
                'type'=>'INT',
                'constraint'=>10
            ],
            'nic'=>[
                'type'=>'VARCHAR',
                'constraint'=>20,
                'unique'=>true                
            ],
            'address'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'image' =>[
                'type'=>'VARCHAR',
                'constraint'=>100
            ],
            'type'=>[
                'type'=>'VARCHAR',
                'constraint'=> 100
            ],
            'specification'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'qualification'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'upload'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'approved'=>[ // If the account is approved or not by the site admin
                'type'=>'VARCHAR',
                'constraint'=>60
            ],

        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('User');
    }

    public function down()
    {
        // drops table when running the cmd command 'php spark migrate:rollback'
        $this->forge->dropTable('User');
    }
}
