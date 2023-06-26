<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblMahasiswaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','unsigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama_mhs' => ['type' => 'VARCHAR', 'constraint' => 100],
            'id_fakultas' => ['type' => 'INT', 'unsigned' => TRUE],
            'id_jurusan' => ['type' => 'INT', 'unsigned' => TRUE],
            'kelas' => ['type' => 'VARCHAR', 'constraint' => 50],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_mahasiswa');
    }
}
