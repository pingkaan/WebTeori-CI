<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        // create table product
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => TRUE
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 10
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'stock' => [
                'type' => 'INT',
                'constraint' => 10
            ],
            'category' => [
                'type' => 'ENUM',
                'constraint' => ['clothes', 'pants', 'shoes'],
                'default' => 'clothes'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('product');
    }

    public function down()
    {
        // drop table product
        $this->forge->dropTable('product');
    }
}
