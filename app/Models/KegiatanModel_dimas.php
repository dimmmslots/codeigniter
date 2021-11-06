<?php 

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel_dimas extends Model {
    protected $table = 'kegiatan_dimas';
    protected $primary_key = 'id';
    protected $allowedFields = ['nama_kegiatan','poin'];
}

?>