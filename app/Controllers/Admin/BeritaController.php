<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
use App\Models\BeritaModel;

class BeritaController extends BaseController{
    
    public function viewBerita(){
        $db = \Config\Database::connect();
        $visi = $db->query("SELECT title, excerpt FROM posts WHERE id_posts = 41 ");
        $data['visi'] = $visi->getFirstRow();
        
        $misi= $db->query("SELECT title, excerpt FROM posts WHERE id_posts = 84 ");
        $data['misi'] = $misi->getFirstRow();

        $bidangUsaha = $db->query("SELECT title, excerpt FROM posts WHERE id_posts = 70 ");
        $data['bidangUsaha'] = $bidangUsaha ->getFirstRow();
        
        $profile = $db->query("SELECT p.*,k.category_name FROM posts p JOIN categories k ON p.id_category = k.id_category WHERE p.id_posts = 86 ");
        $data['profile'] = $profile ->getFirstRow();
        
        $usaha = $db->query("SELECT p.*,k.* FROM posts p,categories k WHERE p.id_category = k.id_category AND k.id_category = 75");
        $data['bidus'] = $usaha->getResult();
        
        $modelG = $db->query("SELECT * FROM kontak");
        $data['kontak'] = $modelG->getFirstRow();

        $modelG = $db->query("SELECT * FROM ref_slider INNER JOIN slider ON slider.id_kategori=ref_slider.id WHERE menu='Slider' ");
        $data['produk'] = $modelG->getResult();

        $modelG = $db->query("SELECT * FROM ref_slider INNER JOIN slider ON slider.id_kategori=ref_slider.id WHERE menu='Galeri' ORDER BY urutan ASC ");
        $data['kegiatan'] = $modelG->getResult();

        return view('admin/halaman_depan',$data); 
    }
    public function detailBerita($id){
        $db = \Config\Database::connect();
        $model = $db->query("SELECT p.*,k.* FROM posts p,categories k WHERE p.id_category = k.id_category AND k.flag = 0 ORDER BY p.created DESC");
        $data['kategori'] = $model->getResult();

        $model = $db->query("SELECT p.*,k.* FROM posts p,categories k WHERE p.id_category = k.id_category AND p.id_posts = $id");
        $data['post']= $model->getFirstRow();
        return view('admin/detail_halaman',$data);
    }

    public function Berita(){
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'berita';
        $data['menu_dropdown_open'] = 'Berita';
        $db = \Config\Database::connect();
        $model = $db->query("SELECT p.*,k.* FROM posts p,categories k WHERE p.id_category = k.id_category AND k.flag = 0 ORDER BY p.id_category DESC");
        $data['postes'] = $model->getResult();
        return view('admin/berita',$data);
    }
    public function createBerita(){
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'berita';
        $data['menu_dropdown_open'] = 'Berita';
        $db = \Config\Database::connect();
        $model = $db->query("SELECT * FROM categories where flag = 0 ");
        $data['post'] = $model->getResult();
        $data['categories'] = $model->getResult();
        
 
        return view('admin/tambah_berita',$data);
    }
    public function saveBerita(){
        
            $db = \Config\Database::connect();
            $categories  = $db->table('categories');
            $model = $db->table('posts');
            $file = $this->request->getFile('featured_image');
            if ($file->isValid() && !$file->hasMoved()){
                $fileName = $file->getRandomName(); 
                $file->move('public/img', $fileName);
            }
            if($this->request->getVar('simpan')){
                $data = [
                    'title' => $this->request->getPost('title'), 
                    'id_category' => $this->request->getPost('id_category'),
                    'featured_image' => $fileName,
                    'excerpt' => $this->request->getPost('excerpt'),
                    'article' => $this->request->getPost('article'),
                    'created' => date('Y-m-d H:i:s'),
                    'publish' => $this->request->getPost( 'publish')            
                ];
                
                $model->insert($data);
                return redirect()->to('admin/berita');
            }
        
    } 
    public function editBerita($id){
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'berita';
        $data['menu_dropdown_open'] = 'Berita';
        $db = \Config\Database::connect();
    
        $kategori = $db->query("SELECT * FROM categories where flag = 0");
        $data['categories'] = $kategori->getResult();

        $builder = $db->table('posts');
        $post = $builder->getWhere(['id_posts' => $id])->getRow();
        $data['post'] = $post;
        return view('admin/edit_berita',$data);
    }

    public function updateBerita(){
        $db = \Config\Database::connect();
        $model = $db->table('posts');

        $id = $this->request->getVar('id_posts');
        $idImage = $model->getWhere(['id_posts' => $id])->getRow();
        $file = $this->request->getFile('featured_image');
        if ($file->getError() == 0) {
            if (!empty($idImage->featured_image)) {
                unlink('public/img/' . $idImage->featured_image);
            }
            $imageName = $file->getRandomName();
            $file->move('public/img', $imageName);
        } else {
            $imageName = $idImage->featured_image;
        }

        $data = [
            'id_posts' => $id,
            'id_category' => $this->request->getPost('id_category'),
            'title' => $this->request->getPost('title'),
            'featured_image' => $imageName,
            'excerpt' => $this->request->getPost('excerpt'),
            'article' => $this->request->getPost('article'),
            'created' => date('Y-m-d H:i:s'),
            'publish' => $this->request->getPost('publish')  
        ];
        if ($model->replace($data)) {
            return redirect()->to('admin/berita');
        }
    }

    public function deleteBerita($id){
        $model = new BeritaModel();
        $query = $model->table('posts');
        $query->where('id_posts',$id);
        $query->delete();

        return redirect()->to('admin/berita');
    }
    //Visi Misi
     public function visiMisi(){
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'visi-misi';
        $data['menu_dropdown_open'] = 'Berita';
        $db = \Config\Database::connect();
        $model = $db->query("SELECT p.*,k.* FROM posts p JOIN categories k ON p.id_category = k.id_category WHERE p.id_posts IN (41,42,84,86)");
        $data['usaha'] = $model->getResult();
        return view('admin/visi',$data);
    }
     public function editVisiMisi($id){
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'visi-misi';
        $data['menu_dropdown_open'] = 'Berita';
        $db = \Config\Database::connect();
    
        $kategori = $db->query("SELECT * FROM categories");
        $data['categories'] = $kategori->getRow();
        
        $builder = $db->table('posts');
        $post = $builder->getWhere(['id_posts' => $id])->getRow();
        $data['post'] = $post;
        
        return view('admin/edit_visi',$data);
    }
    
    public function updateVisiMisi(){
        $db = \Config\Database::connect();
        $model = $db->table('posts');
        $id = $this->request->getVar('id_posts');
        if($this->request->getVar('simpan')){
            $data = [
                'id_posts' => $id, 
                'title' => $this->request->getPost('title'), 
                'id_category' => $this->request->getPost('id_category'),
                'excerpt' => $this->request->getPost('excerpt'),    
            ];
        
        $model->replace($data);
        return redirect()->to('admin/visi');
            
        }
    }
    //   public function tambahBidangUsaha(){
    //     $data['breadcrumbs_title'] = 'Kontak';
    //     $data['breadcrumbs_item'] = 'Kontak';
    //     $data['breadcrumbs_item2'] = 'Daftar Kontak';
    //     $data['menu_active'] = 'visi-misi';
    //     $data['menu_dropdown_open'] = 'Berita';
    //     $db = \Config\Database::connect();
    //     $model = $db->query("SELECT * FROM categories where id_category = '75' ");
    //     $data['categories'] = $model->getRow();
        
 
    //     return view('admin/tambah_bidang_visi',$data);
    // }
    // public function saveBidangUsaha(){
    //         $db = \Config\Database::connect();
    //         $categories  = $db->table('categories');
    //         $model = $db->table('posts');;
    //         if($this->request->getVar('simpan')){
    //             $data = [
    //                 'title' => $this->request->getPost('title'), 
    //                 'id_category' => $this->request->getPost('id_category'),
    //                 'article' => $this->request->getPost('excerpt'),           
    //             ];
                
    //             $model->insert($data);
    //             return redirect()->to('admin/visi');
    //         }
        
    // }
    
    //Bidang Usaha
    public function bidangUsaha(){
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'bidang-usaha';
        $data['menu_dropdown_open'] = 'Berita';
        $db = \Config\Database::connect();
        $model = $db->query("SELECT p.*,k.* FROM posts p,categories k WHERE p.id_category = k.id_category AND k.id_category = 75");
        $data['usaha'] = $model->getResult();
        return view('admin/bidang_usaha',$data);
    }
     public function tambahBidangUsaha(){
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'bidang-usaha';
        $data['menu_dropdown_open'] = 'Berita';
        $db = \Config\Database::connect();
        $model = $db->query("SELECT * FROM categories where id_category = '75' ");
        $data['categories'] = $model->getRow();
        
 
        return view('admin/tambah_bidang_usaha',$data);
    }
    public function saveBidangUsaha(){
            $db = \Config\Database::connect();
            $categories  = $db->table('categories');
            $model = $db->table('posts');;
            if($this->request->getVar('simpan')){
                $data = [
                    'title' => $this->request->getPost('title'), 
                    'id_category' => $this->request->getPost('id_category'),
                    'excerpt' => $this->request->getPost('excerpt'),           
                ];
                
                $model->insert($data);
                return redirect()->to('admin/bidang-usaha');
            }
        
    }
     
    public function editBidangUsaha($id){
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'bidang-usaha';
        $data['menu_dropdown_open'] = 'Berita';
        $db = \Config\Database::connect();
    
        $kategori = $db->query("SELECT * FROM categories where id_category = 75");
        $data['categories'] = $kategori->getRow();

        $builder = $db->table('posts');
        $post = $builder->getWhere(['id_posts' => $id])->getRow();
        $data['post'] = $post;
        return view('admin/edit_bidang_usaha',$data);
    }
    
    public function updateBidangUsaha(){
        $db = \Config\Database::connect();
        $model = $db->table('posts');
        $id = $this->request->getVar('id_posts');
        if($this->request->getVar('simpan')){
            $data = [
                'id_posts' => $id,
                'title' => $this->request->getPost('title'), 
                'id_category' => $this->request->getPost('id_category'),
                'excerpt' => $this->request->getPost('excerpt'),    
            ];
        
        $model->replace($data);
            return redirect()->to('admin/bidang-usaha');
            
        }
    }
    public function deleteBidangUsaha($id){
        $db = \Config\Database::connect();
        $query = $db->table('posts');
        $query->where('id_posts',$id);
        $query->delete();

        return redirect()->to('admin/bidang-usaha');
    }

}