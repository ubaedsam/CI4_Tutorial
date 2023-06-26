<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblFakultasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_fakultas' => ['type' => 'INT','unsigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama_fakultas' => ['type' => 'VARCHAR', 'constraint' => 100],
        ]);
        $this->forge->addKey('id_fakultas', true);
        $this->forge->createTable('tbl_fakultas');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_fakultas');
    }
}
