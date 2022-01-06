<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_peminjaman'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nim'       => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
            ],
            'id_buku' => [
                'type' => 'INT',
                'constraint'     => 100,
            ],
            'tgl_pinjam' => [
                'type' => 'DATE',

            ],
            'tgl_kembali' => [
                'type' => 'DATE',

            ],
            'created_at' => [
                'type' => 'DATETIME',

            ],
            'updated_at' => [
                'type' => 'DATETIME',

            ]
        ]);
        $this->forge->addKey('id_peminjaman', true);
        $this->forge->addForeignKey('nim', 'mahasiswa', 'nim');
        $this->forge->addForeignKey('id_buku', 'buku', 'id_buku');
        $this->forge->createTable('peminjaman');
    }

    public function down()
    {
        $this->forge->dropForeignKey('nim', 'mahasiswa', 'nim');
        $this->forge->dropForeignKey('id_buku', 'buku', 'id_buku');
        $this->forge->dropTable('peminjaman');
    }
}
