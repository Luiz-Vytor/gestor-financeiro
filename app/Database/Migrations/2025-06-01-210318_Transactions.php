<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransactionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'value' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
