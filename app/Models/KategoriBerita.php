<?php


namespace App\Models;
use CodeIgniter\Model;

class KategoriBerita extends Model{

    protected $table = 'categories';
    protected $primaryKey = 'id_category';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $allowedFields = ['category_name','slug','flag']; 

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}