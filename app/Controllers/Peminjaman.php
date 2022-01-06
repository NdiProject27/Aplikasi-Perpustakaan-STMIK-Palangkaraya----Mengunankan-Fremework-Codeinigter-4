<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\MahasiswaModel;
use App\Models\PeminjamanModel;

use CodeIgniter\RESTful\ResourceController;

class Peminjaman extends ResourceController
{
    protected $helpers = ['custom'];
    function __construct()
    {
        $this->buku       = new BukuModel();
        $this->mahasiswa = new MahasiswaModel();
        $this->peminjaman = new PeminjamanModel();
    }

    public function index()

    {
        $data['peminjaman'] = $this->peminjaman->getAll();
        $data['pageTitle'] = 'Daftar Peminjaman Buku ';
        return view('peminjaman/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data['pageTitle'] = 'Tambah Data Peminjaman Buku ';

        $data['buku'] = $this->buku->findAll();
        $data['mahasiswa'] = $this->mahasiswa->findAll();
        $data['peminjaman'] = $this->peminjaman->findAll();
        return view('peminjaman/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->peminjaman->insert($data);
        session()->setFlashdata('message', 'Tambah Data Peminjaman Buku Berhasil');
        return redirect()->to(site_url('peminjaman'));
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)

    {
        $data['pageTitle'] = 'Tambah Data Peminjaman Buku ';

        $peminjaman = $this->peminjaman->find($id);
        if (is_object($peminjaman)) {
            $data['buku'] = $this->buku->findAll();
            $data['mahasiswa'] = $this->mahasiswa->findAll();
            $data['peminjaman'] = $peminjaman;
            return view('peminjaman/edit', $data);
            # code...
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->peminjaman->update($id, $data);
        session()->setFlashdata('message', 'Update Data Peminjaman Buku Berhasil');
        return redirect()->to(site_url('peminjaman'));
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->peminjaman->delete($id);
        session()->setFlashdata('message', 'Hapus Data Peminjaman Buku Berhasil');
        return redirect()->to(site_url('peminjaman'));
    }
}
