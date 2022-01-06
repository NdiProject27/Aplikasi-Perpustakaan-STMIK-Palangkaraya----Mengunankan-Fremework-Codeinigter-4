<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $buku;
    function __construct()
    {
        $this->buku = new BukuModel();
    }
    public function index()

    {
        $data['pageTitle'] = 'Daftar Koleksi Buku';
        $data['buku'] = $this->buku->findAll();
        return view('dashboard/buku', $data);
    }


    public function create()
    {

        $data = [
            'pageTitle' => 'Input Koleksi Buku',
            'validation' => \Config\Services::validation()
        ];

        return view('dashboard/buku_create', $data);
    }

    public function store()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',

                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'pengarang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,2024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang Anda Pilih Bukan Gambar',
                    'mime_in' => 'Yang Anda Pilih Bukan Gambar'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $fileSampul = $this->request->getFile('sampul');
        //cek dulu
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'sampul-1.png';
        } else {
            //bikin nama sampul random
            $namaSampul = $fileSampul->getRandomName();
            //pindahkan file ke folder sampul
            $fileSampul->move('sampul', $namaSampul);
        }

        $this->buku->insert([
            'judul' => $this->request->getVar('judul'),
            'penerbit' => $this->request->getVar('penerbit'),
            'kategori' => $this->request->getVar('kategori'),
            'pengarang' => $this->request->getVar('pengarang'),
            'tahun' => $this->request->getVar('tahun'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'sampul' => $namaSampul,
        ]);
        session()->setFlashdata('message', 'Tambah Data Buku Berhasil');
        return redirect()->to('/buku');
    }

    public  function edit($id_buku)
    {
        $dataBuku = $this->buku->find($id_buku);
        if (empty($dataBuku)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak Ditemukan !');
        }
        $data = [
            'pageTitle' => 'Edit Data Buku',
            'validation' => \Config\Services::validation(),
            'buku' => $dataBuku
        ];
        return view('dashboard/buku_edit', $data);
    }

    public function update($id_buku)
    {

        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',

                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'pengarang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,2024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang Anda Pilih Bukan Gambar',
                    'mime_in' => 'Yang Anda Pilih Bukan Gambar'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $fileSampulLama = $this->request->getFile('sampul');
        //pengecekan photo lama
        if ($fileSampulLama->getError() == 4) {
            $namaSampul = 'sampul-1.png';
        } else {
            $namaSampul = $fileSampulLama->getRandomName();
            $fileSampulLama->move('sampul', $namaSampul);
            unlink('sampul/' . $this->request->getVar('SampulLama'));
        }


        $this->buku->update($id_buku, [
            'judul' => $this->request->getVar('judul'),
            'penerbit' => $this->request->getVar('penerbit'),
            'kategori' => $this->request->getVar('kategori'),
            'pengarang' => $this->request->getVar('pengarang'),
            'tahun' => $this->request->getVar('tahun'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'sampul' => $namaSampul,
        ]);
        session()->setFlashdata('message', 'Data Data Buku Berhasil');
        return redirect()->to('/buku');
    }

    function delete($id_buku)
    {
        $dataBuku = $this->buku->find($id_buku);
        if ($dataBuku->sampul != 'sampul-1.png') {

            unlink('sampul/' . $dataBuku->sampul);
        }

        if (empty($dataBuku)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak Ditemukan !');
        }
        $this->buku->delete($id_buku);
        session()->setFlashdata('message', 'Delete Data Mahasiswa Berhasil');
        return redirect()->to('/buku');
    }

    public function view($id_buku)
    {
        $dataBuku = $this->buku->find($id_buku);
        if (empty($dataBuku)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
        }
        $data['pageTitle'] = 'Data Buku';
        $data['buku'] = $dataBuku;
        return view('dashboard/buku_view', $data);
    }
}
