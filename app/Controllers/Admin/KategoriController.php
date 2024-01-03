<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriBerita;


class KategoriController extends BaseController{
    public function kategoriBerita(){
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'Kategori-berita';
        $data['menu_dropdown_open'] = 'Berita';
        $kategori = new KategoriBerita();
        $kategori->orderBy('id_category' , 'DESC');
        $query = $kategori->get();
        $data['categories'] = $query->getResult();
        return view('admin/kategori_berita',$data);
    }

    public function createKategori(){
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'Kategori-berita';
        $data['menu_dropdown_open'] = 'Berita';
        return view("admin/tambah_kategori_berita",$data);
    }

    public function saveKategoriBerita(){
        if($this->request->getVar('simpan')){
            $kategori = new KategoriBerita();
            $kategoriSlug = $this->request->getPost('slug');
            $slug = '';
            if(is_string($kategoriSlug)){                 
                $slug = url_title($kategoriSlug);
            }
            $data = [
                'category_name' => $this->request->getPost('category_name'),
                'slug'=> $slug,
                'flag' => $this->request->getPost('flag')
            ];
            if($kategori->save($data)){
                return redirect()->to('admin/kategori-berita');
            }
        }
    }

    public function editKategoriBerita($id)
    {  
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'Kategori-berita';
        $data['menu_dropdown_open'] = 'Berita';
        $db = new kategoriBerita();
        $builder = $db->table('categories');
        $periode = $builder->getWhere(['id_category' => $id])->getRow();
        $data['categories'] = $periode;

        return view('admin/edit_kategori_berita',$data);
        
       
    }

    public function updateKategori(){
            $db      = \Config\Database::connect();
            $kategori = $db->table('categories');
            $kategoriSlug = $this->request->getPost('slug');
            $id =  $this->request->getVar('id_category');
            $slug = '';
            if(is_string($kategoriSlug)){
                $slug = url_title($kategoriSlug);
            }
            $data = [
                'id_category' => $id,
                'category_name' => $this->request->getPost('category_name'),
                'slug'=> $slug,
                'flag' => $this->request->getPost('flag')
            ];
            if($kategori->replace($data)){
                return redirect()->to('/admin/kategori-berita');
            } 
    }
    
    public function deleteKategori($id)
    {
        $db = new kategoriBerita();
        $builder = $db->table('categories');
        $builder->where('id_category', $id);
        $builder->delete();

        return redirect()->to('admin/kategori-berita');
    }

}