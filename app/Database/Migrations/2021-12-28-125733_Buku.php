<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'sampul' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'pengarang' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun' => [
                'type' => 'YEAR',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id_buku', true);
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
