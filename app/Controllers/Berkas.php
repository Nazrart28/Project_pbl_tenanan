<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;

class Berkas extends BaseController
{
    protected $BerkasModel;

    public function __construct()
    {
        $this->BerkasModel = new BerkasModel();
    }
    public function index()
    {
        $berkas = new BerkasModel();
        $data['berkas'] = $berkas->findAll();
        return view('berkas/view_berkas', $data);
    }

    public function create()
    {
        return view('berkas/form_upload');
    }

    public function save()
    {
        if (!$this->validate([
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,application/pdf,application/zip,application/msword,application/x-tar]|max_size[berkas,10000]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa pdf, zip, msword',
                    'max_size' => 'Ukuran File Maksimal 1 GB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $berkas = new BerkasModel();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $berkas->insert([
            'berkas' => $fileName,
            'keterangan' => $this->request->getPost('keterangan')
        ]);
        $dataBerkas->move('uploads/berkas/', $fileName);
        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to(base_url('berkas'));
    }

    function download($id)
    {
        $berkas = new BerkasModel();
        $data = $berkas->find($id);
        return $this->response->download('uploads/berkas/' . $data->berkas, null);
    }
}
