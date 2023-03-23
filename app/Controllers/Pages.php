<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | PBL'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | PBL'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | PBL'
        ];
        return view('pages/contact', $data);
    }

    /*public function mitra()
    {
        $data = [
            'title' => 'Mitra | PBL'
        ];
        return view('pages/mitra', $data);
    }*/
}
