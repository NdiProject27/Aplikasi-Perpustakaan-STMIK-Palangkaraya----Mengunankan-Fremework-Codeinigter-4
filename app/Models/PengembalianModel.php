<?php

namespace App\Models;

use CodeIgniter\Model;

class PengembalianModel extends Model
{
    protected $table = "pengembalian";
    protected $primaryKey = "id_pengembalian";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pengembalian', 'nim', 'id_buku', 'tgl_kembali'];

    function getAll()
    {
        $builder = $this->db->table('pengembalian');
        $builder->join('buku', 'buku.id_buku = pengembalian.id_buku');
        $builder->join('mahasiswa', 'mahasiswa.nim = pengembalian.nim');


        $query = $builder->get();
        return $query->getResult();
    }
}
