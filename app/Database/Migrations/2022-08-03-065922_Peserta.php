<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peserta extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type'=>'INT',
                    'constraint'=>11,
                    'auto_increment'=>true
                ],
                'name' => [
                    'type'=>'VARCHAR',
                    'constraint'=>255
                ],
                'email' => [
                    'type'=>'VARCHAR',
                    'constraint'=>255
                ],
                'created_at' => [
                    'type'=>'DATETIME',
                    'null'=>true
                ],
                'update_at' => [
                    'type'=>'DATETIME',
                    'null'=>true
                ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('peserta');
    }

    public function down()
    {
        $this->forge->dropTable('peserta');
    }
}
