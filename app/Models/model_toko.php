<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_toko extends Model
{
    protected $table = 'tb_toko';
    public function tampilan_data(): array
    {
        return $this->findAll();
    }
}