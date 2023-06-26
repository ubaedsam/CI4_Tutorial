<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblSiswaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswa' => ['type' => 'INT','unsigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nis' => ['type' => 'VARCHAR', 'constraint' => 10],
            'nama' => ['type' => 'VARCHAR', 'constraint' => 255],
            'email' => ['type' => 'VARCHAR', 'constraint' => 35],
            'foto_siswa' => ['type' => 'VARCHAR', 'constraint' => 255],
        ]);
        $this->forge->addKey('id_siswa', true);
        $this->forge->createTable('tbl_siswa');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_siswa');
    }
}
