<?php

namespace App\Controllers;

use App\Models\MitraModel;

class Mitra extends BaseController
{
    protected $mitraModel;
    public function __construct()
    {
        $this->mitraModel = new MitraModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Mitra',
            'mitra' => $this->mitraModel->getMitra()
        ];

        return view('mitra/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Mitra',
            'mitra' => $this->mitraModel->getMitra($id)
        ];

        //jika eror
        /*if(empty($data['mitra'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Halaman tidak bisa dimuat');
        }*/
        return view('mitra/detail', $data);
    }

    public function create()
    {
        //session();
        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()
        ];


        return view('mitra/create', $data);
    }

    public function save()
    {
        //validasi
        if (!$this->validate([
            'kelompok' => [
                'rules' => 'required|is_unique[mitra.kelompok]',
                'errors' => [
                    'required' => '{field} kelompok harus diisi',
                    'is_unique' => '{filed} kelompok sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/mitra/create')->withInput()->with('validation', $validation);
        }

        $id = url_title($this->request->getVar('id'), '-', true);

        $this->mitraModel->save([
            'id' => $id,
            'mitra' => $this->request->getVar('mitra'),
            'proyek' => $this->request->getVar('proyek'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kelompok' => $this->request->getVar('kelompok')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/mitra/index');
    }

    public function delete($id)
    {
        $this->mitraModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/mitra');
    }

    public function edit($id)
    {
        //session();
        $data = [
            'title' => 'Form Ubah Data',
            'validation' => \Config\Services::validation(),
            'mitra' => $this->mitraModel->getMitra($id)
        ];
        return view('mitra/edit', $data);
    }

    public function update($id)
    {
        //cek data
        $dataLama = $this->mitraModel->getMitra($this->request->getVar('id'));
        if ($dataLama['kelompok'] == $this->request->getVar('kelompok')) {
            $rule_kelompok = 'required';
        }else {
            $rule_kelompok = 'required|is_unique[mitra.kelompok]';
        }

        //validasi
        if (!$this->validate([
            'kelompok' => [
                'rules' => $rule_kelompok,
                'errors' => [
                    'required' => '{field} kelompok harus diisi',
                    'is_unique' => '{filed} kelompok sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/mitra/create')->withInput()->with('validation', $validation);
        }

        $id = url_title($this->request->getVar('id'), '-', true);

        $this->mitraModel->save([
            'id' => $id,
            'mitra' => $this->request->getVar('mitra'),
            'proyek' => $this->request->getVar('proyek'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kelompok' => $this->request->getVar('kelompok')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/mitra/index');
    }
}