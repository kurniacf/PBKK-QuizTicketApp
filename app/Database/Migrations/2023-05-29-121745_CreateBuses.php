<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBuses extends Migration
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
            'bus_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'bus_type' => [
                'type' => 'ENUM',
                'constraint' => ['small', 'medium', 'large'],
                'default' => 'medium'
            ],
            'total_seats' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
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
        $this->forge->createTable('buses');
    }

    public function down()
    {
        $this->forge->dropTable('buses');
    }
}
