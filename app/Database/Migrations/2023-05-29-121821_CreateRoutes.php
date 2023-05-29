<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRoutes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'start_location' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'end_location' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'distance' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true
            ],
            'travel_time' => [
                'type' => 'TIME',
                'null' => true
            ],
            'fare' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('routes');
    }

    public function down()
    {
        $this->forge->dropTable('routes');
    }
}
