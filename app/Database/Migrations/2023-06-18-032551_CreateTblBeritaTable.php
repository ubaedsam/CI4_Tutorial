<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblBeritaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_berita' => ['type' => 'INT','usigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'judul' => ['type' => 'VARCHAR', 'constraint' => 100],
            'isi_berita' => ['type' => 'text'],
            'gambar' => ['type' => 'VARCHAR', 'constraint' => 100],
        ]);
        $this->forge->addKey('id_berita', true);
        $this->forge->createTable('tbl_berita');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_berita');
    }
}
