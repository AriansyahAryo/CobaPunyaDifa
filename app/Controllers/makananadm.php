<?php

namespace App\Controllers;

use App\Models\MMakanan; // Perbaiki penulisan nama model

class MakananAdm extends BaseController
{
    public function index()
    {
        $mmakanan = new MMakanan(); // Perbaiki nama instansiasi model
        $data['makanan'] = $mmakanan->findAll(); // Mengambil semua data makanan dari database

        // Load view dan kirimkan data ke view
        echo view('layout/header'); // Memuat bagian header
        echo view('layout/navbar'); // Memuat bagian navbar
        echo view('templates/makananadm', $data); // Memuat bagian konten dengan data yang diteruskan
        echo view('layout/footer'); // Memuat bagian footer
    }

    public function add_data_makanan(){

        echo view('layout/header'); 
        echo view('layout/navbar');
        echo view('templates/add_data_makanan');
        echo view('layout/footer');
    }

    public function proses_add_makanan(){
        $mmakanan = new MMakanan(); // Perbaiki penulisan nama model
        $mmakanan->insert($this->request->getPost());
        return redirect()->to(base_url('makananadm')); // Perbaiki tanda semicolon dan penulisan url
        
    }

    public function edit_data_makanan($kode_makanan = false){
        $mmakanan = new MMakanan();
        $data_makanan = $mmakanan->find($kode_makanan);
        return view('/edit_data_makanan',['makanan' => $data_makanan]);
    }

    public function delete($kode_makanan){
        $makananModel = new MMakanan(); // Memastikan model dimuat dengan benar
        $makananModel->where('kode_makanan', $kode_makanan)->delete(); // Memanggil fungsi delete dari model dengan benar
        return redirect()->to('/makananadm');
    }
    
}
