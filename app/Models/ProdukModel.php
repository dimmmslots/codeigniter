<?php 

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model {
    protected $table = 'produk';
    protected $primary_key = 'kode';
    protected $allowedFields = ['kode','nama','harga','deskripsi','gambar'];
}

?>