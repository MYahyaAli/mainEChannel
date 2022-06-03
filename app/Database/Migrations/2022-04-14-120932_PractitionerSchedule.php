<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class PractitionerSchedule extends Migration
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
            'practitionerid'=>[
                'type'=>'VARCHAR',
                'constraint'=>'5',
            ],
            'hospital'=>[
                'type'=>'VARCHAR',
                'constraint'=>'255'
            ],
            'appointdate'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'appointtime'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'patientnum'=>[
                'type'=>'INT',
                'constraint'=>255
            ],
            'fee'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('PractitionerSchedule');
    }

    public function down()
    {
        $this->forge->dropTable('PractitionerSchedule');
    }
}
