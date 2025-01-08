<?php

namespace App\Controllers;

use App\Models\Model_matkul;

class dashboard extends BaseController
{
    public function __construct()
        {
            $this->model_matkul = new Model_matkul();
        }
    
    public function index(): string
    {
        $data['matkul'] = $this->model_matkul->tampilan_data();
        echo view('templates/header');
        echo view('templates/sidebar');
        echo view('templates/footer');
        return view('dashboard', $data);
    }
}
