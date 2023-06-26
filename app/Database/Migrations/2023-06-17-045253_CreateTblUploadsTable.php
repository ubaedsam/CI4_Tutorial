<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblUploadsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_upload' => ['type' => 'INT','unsigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'judul' => ['type' => 'VARCHAR', 'constraint' => 255],
        ]);
        $this->forge->addKey('id_upload', true);
        $this->forge->createTable('tbl_uploads');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_uploads');
    }
}
