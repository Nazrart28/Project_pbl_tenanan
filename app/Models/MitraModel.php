<?php

namespace App\Models;

use CodeIgniter\Model;

class MitraModel extends Model
{
    protected $table = 'mitra';
    protected $useTimesstamps = true;
    protected $allowedFields = ['mitra', 'proyek', 'deskripsi', 'kelompok'];

    public function getMitra($id = false)
    {
        if($id == false ){
            return $this->findAll();
        }

        return $this->where(['id' => $id]) -> first();
    }
}
