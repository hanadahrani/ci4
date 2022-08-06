<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Todo extends Migration
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
                'task' => [
                    'type'=>'VARCHAR',
                    'constraint'=>255
                ],
                'start_date' => [
                    'type'=>'DATE',
                    'null'=>true
                ],
                'end_date' => [
                    'type'=>'DATE',
                    'null'=>true
                ],
                'status' => [
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
        $this->forge->createTable('todo');
    }

    public function down()
    {
        $this->forge->dropTable('todo');    
    }
}
