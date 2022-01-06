<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\MahasiswaModel;
use App\Models\PengembalianModel;

use CodeIgniter\RESTful\ResourceController;

class Pengembalian extends ResourceController
{
    protected $helpers = ['custom'];
    function __construct()
    {
        $this->buku       = new BukuModel();
        $this->mahasiswa = new MahasiswaModel();
        $this->pengembalian = new PengembalianModel();
    }

    public function index()
    {
        $data['pengembalian'] = $this->pengembalian->getAll();



        $data['pageTitle'] = 'Daftar Pengembalian Buku ';
        return view('pengembalian/index', $data);
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
        $data['pageTitle'] = 'Tambah Data Pengembalian Buku ';
        $data['buku'] = $this->buku->findAll();
        $data['mahasiswa'] = $this->mahasiswa->findAll();
        $data['pengembalian'] = $this->pengembalian->findAll();
        return view('pengembalian/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->pengembalian->insert($data);
        session()->setFlashdata('message', 'Tambah Data Pengembalian Buku Berhasil');
        return redirect()->to(site_url('pengembalian'));
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data['pageTitle'] = 'Tambah Data Pengembalian Buku ';

        $pengembalian = $this->pengembalian->find($id);
        if (is_object($pengembalian)) {
            $data['buku'] = $this->buku->findAll();
            $data['mahasiswa'] = $this->mahasiswa->findAll();
            $data['pengembalian'] = $pengembalian;
            return view('pengembalian/edit', $data);
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
        $this->pengembalian->update($id, $data);
        session()->setFlashdata('message', 'Update Data Pengembalian Buku Berhasil');
        return redirect()->to(site_url('pengembalian'));
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->pengembalian->delete($id);
        session()->setFlashdata('message', 'Hapus Data Pengembalian Buku Berhasil');
        return redirect()->to(site_url('pengembalian'));
    }
}
