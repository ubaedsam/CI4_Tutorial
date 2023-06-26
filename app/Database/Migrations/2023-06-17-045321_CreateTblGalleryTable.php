<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblGalleryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','unsigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'id_upload' => ['type' => 'INT', 'unsigned' => TRUE],
            'gambar' => ['type' => 'VARCHAR', 'constraint' => 255],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_galeries');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_galeries');
    }
}
