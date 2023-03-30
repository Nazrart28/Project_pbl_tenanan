<?php

namespace App\Models;

use CodeIgniter\Model;

class LogbookModel extends Model
{
    protected $table = 'logbook';
    protected $useTimesstamps = true;
    protected $allowedFields = ['tanggal', 'kegiatan'];

    public function getLogbook($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
