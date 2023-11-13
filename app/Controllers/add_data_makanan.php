<?php

namespace App\Controllers;

class add_data_makanan extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('templates/dashboard');
        echo view('layout/footer');
    }
}
