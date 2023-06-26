<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_id' => ['type' => 'INT','usigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'product_name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'product_description' => ['type' => 'VARCHAR', 'constraint' => 200],
        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
