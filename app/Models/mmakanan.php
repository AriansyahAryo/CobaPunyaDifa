<?php

namespace App\Models;

use CodeIgniter\Model;

class mmakanan extends Model
{
    protected $table = 'makanan'; // Ganti dengan nama tabel Anda
    protected $primaryKey = 'Kode_makanan'; // Ganti dengan kolom kunci utama tabel Anda
    protected $allowedFields = ['kode_makanan', 'nama_makanan', 'gambar', 'stok_makanan', 'detail_makanan']; // Sesuaikan dengan kolom-kolom yang ada di tabel Anda
}
