<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | PBL'
        ];
        return view('dosen/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Dosen | PBL'
        ];
        return view('dosen/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Mahasiswa | PBL'
        ];
        return view('dosen/contact', $data);
    }

    /*public function mitra()
    {
        $data = [
            'title' => 'Mitra | PBL'
        ];
        return view('pages/mitra', $data);
    }*/
}
