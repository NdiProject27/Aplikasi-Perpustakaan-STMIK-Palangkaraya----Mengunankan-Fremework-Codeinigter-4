<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = "peminjaman";
    protected $primaryKey = "id_peminjaman";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_peminjaman', 'nim', 'id_buku', 'tgl_kembali', 'tgl_pinjam'];

    function getAll()
    {
        $builder = $this->db->table('peminjaman');
        $builder->join('buku', 'buku.id_buku = peminjaman.id_buku');
        $builder->join('mahasiswa', 'mahasiswa.nim = peminjaman.nim');


        $query = $builder->get();
        return $query->getResult();
    }
}
