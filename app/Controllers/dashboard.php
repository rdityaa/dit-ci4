<?php

namespace App\Controllers;

use App\Models\Model_toko;

class dashboard extends BaseController
{
    public function __construct()
        {
            $this->model_toko = new Model_toko();
        }
    
    public function index(): string
    {
        $data['toko'] = $this->model_toko->tampilan_data();
        echo view('templates/header');
        echo view('templates/sidebar');
        echo view('templates/footer');
        return view('dashboard', $data);
    }
}
