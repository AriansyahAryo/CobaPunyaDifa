<?php

namespace App\Controllers;

class MinumanAdm extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('templates/minumanadm');
        echo view('layout/footer');
    }
}
