<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblJurusanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jurusan' => ['type' => 'INT','unsigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama_jurusan' => ['type' => 'VARCHAR', 'constraint' => 100],
        ]);
        $this->forge->addKey('id_jurusan', true);
        $this->forge->createTable('tbl_jurusan');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_jurusan');
    }
}
