<?php

namespace App\Controllers;

class Chart extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('templates/chart');
        echo view('layout/navbar');
        echo view('layout/footer');
    }
}
