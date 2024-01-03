<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'posts';
    protected $primaryKey = 'id_posts';
    protected $insertID         = 0;
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields = [
        'title',
        'id_category',
        'featured_image',
        'excerpt',
        'article',
        'created',
        'publish'
    ];


    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}
