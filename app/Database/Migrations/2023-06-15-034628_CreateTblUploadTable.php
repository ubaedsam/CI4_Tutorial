<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblUploadTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','unsigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'keterangan' => ['type' => 'VARCHAR', 'constraint' => 255],
            'gambar' => ['type' => 'VARCHAR', 'constraint' => 255],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_upload');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_upload');
    }
}
