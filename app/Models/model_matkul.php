<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_matkul extends Model
{
    protected $table = 'tb_matkul';
    public function tampilan_data(): array
    {
        return $this->findAll();
    }
}