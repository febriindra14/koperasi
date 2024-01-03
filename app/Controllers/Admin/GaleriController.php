<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GaleriModel;
use App\Models\S_KategoriModel;

class GaleriController extends BaseController
{
  //s_kategori one function
  public function kategorigaleri($param)
  {
    $data['breadcrumbs_title'] = 'Koperasi';
    $data['breadcrumbs_item'] = $param;
    $data['breadcrumbs_item2'] = 'Kategori';
    $data['menu_active'] = $param;
    $data['menu_dropdown_open'] = $param;
    $db      = \Config\Database::connect();
    $modelG = $db->query("SELECT * FROM ref_slider WHERE menu = '" . $param . "' ");
    $data['data'] = $modelG->getResult();
    $data['param'] = $param;
    return view('admin/kategori_' . $param . '', $data);
  }
  public function addkategori($param)
  {
    $data['breadcrumbs_title'] = $param;
    $data['breadcrumbs_item'] = 'Kategori';
    $data['breadcrumbs_item2'] = 'Tambah Kategori';
    $data['menu_active'] = $param;
    $data['menu_dropdown_open'] = $param;

    return view('admin/tambah_kategori_' . $param . '', $data);
  }
  public function savekategori($param)
  {
    $model = model(S_KategoriModel::class);

    if ($this->request->getVar('simpan')) {
      $model->save([
        'menu'    => $this->request->getPost('menu'),
        'kategori' => $this->request->getPost('kategori'),
        'publish' => $this->request->getPost('publish'),
      ]);
      if ($param == 'Galeri') {
        return redirect()->to('/admin/galeri-kategori');
      } else {
        return redirect()->to('/admin/slider-kategori');
      }
    }
  }
  public function editkategori($id, $param)
  {
    $data['breadcrumbs_title'] = $param;
    $data['breadcrumbs_item'] = 'Kategori';
    $data['breadcrumbs_item2'] = 'Edit kategori';
    $data['menu_active'] = $param;
    $data['menu_dropdown_open'] = $param;

    $db      = \Config\Database::connect();

    $builder = $db->table('ref_slider');
    $kategori = $builder->getWhere(['id' => $id])->getRow();
    $data['ref_slider'] = $kategori;

    return view('admin/edit_kategori_' . $param . '', $data);
  }

  public function updatekategori($param)
  {
    $db      = \Config\Database::connect();
    $builder = $db->table('ref_slider');
    $data = [
      'id' => $this->request->getVar('id'),
      'menu' => $this->request->getPost('menu'),
      'kategori' => $this->request->getPost('kategori'),
      'publish' => $this->request->getPost('publish'),
    ];
    if ($builder->replace($data) && ($param == 'Galeri')) {
      return redirect()->to('admin/galeri-kategori');
    } else {
      return redirect()->to('/admin/slider-kategori');
    }
  }

  public function hapuskategori($id, $param)
  {
    $db      = \Config\Database::connect();
    $builder = $db->table('ref_slider');
    if ($builder->delete(['id' => $id]) && ($param == 'Galeri')) {
      return redirect()->to('admin/galeri-kategori');
    } else {
      return redirect()->to('/admin/slider-kategori');
    }
  }

  //galeri
  public function galeri()
  {
    $data['breadcrumbs_title'] = 'Koperasi';
    $data['breadcrumbs_item'] = 'Galeri';
    $data['breadcrumbs_item2'] = 'Semua Galeri';
    $data['menu_active'] = 'Galerisub';
    $data['menu_dropdown_open'] = 'Galeri';

    $db      = \Config\Database::connect();
    $modelG = $db->query("SELECT * FROM ref_slider INNER JOIN slider ON slider.id_kategori=ref_slider.id WHERE menu='Galeri' ");
    $data['data'] = $modelG->getResult();
    return view('admin/Galerisub', $data);
  }
  public function addgaleri()
  {
    $data['breadcrumbs_title'] = 'Koperasi';
    $data['breadcrumbs_item'] = 'Galeri';
    $data['breadcrumbs_item2'] = 'Semua Galeri';
    $data['menu_active'] = 'Galerisub';
    $data['menu_dropdown_open'] = 'Galeri';

    $db      = \Config\Database::connect();
    $modelG = $db->query("SELECT * FROM ref_slider WHERE menu='Galeri' ");
    $data['kategori'] = $modelG->getResult();
    return view('admin/tambah_galeri', $data);
  }
  public function savegaleri()
  {
    $model = model(GaleriModel::class);

    $file = $this->request->getFile('image');
    if ($file->isValid() && !$file->hasMoved()) {
      $imageName = $file->getRandomName();
      $file->move('public/img', $imageName);
    }

    if ($this->request->getVar('simpan')) {
      $model->save([
        'id' => $this->request->getPost('id'),
        'image' => $imageName,
        'title' => $this->request->getPost('title'),
        'deskripsi' => $this->request->getPost('deskripsi'),
        'publish' => $this->request->getPost('publish'),
        'urutan' => $this->request->getPost('urutan'),
        'id_kategori' => $this->request->getPost('id_kategori'),
      ]);
      return redirect()->to('/admin/galeri');
    }
  }
  public function editgaleri($id)
  {
    $data['breadcrumbs_title'] = 'Koperasi';
    $data['breadcrumbs_item'] = 'Galeri';
    $data['breadcrumbs_item2'] = 'Semua Galeri';
    $data['menu_active'] = 'Galerisub';
    $data['menu_dropdown_open'] = 'Galeri';

    $db      = \Config\Database::connect();

    $builder = $db->table('slider');
    $member = $builder->getWhere(['id' => $id])->getRow();
    $data['data'] = $member;
    return view('admin/edit_galeri', $data);
  }
  public function updategaleri()
  {
    $db      = \Config\Database::connect();
    $builder = $db->table('slider');

    $member = new GaleriModel();
    $idmember = $builder->select('*')->getWhere(['id' => $this->request->getVar('id')])->getRow();

    $file = $this->request->getFile('image');
    if ($file->getError() == 0) {
      if (!empty($idmember->image)) {
        unlink('public/img/' . $idmember->image);
      }
      $imageName = $file->getRandomName();
      $file->move('public/img', $imageName);
    } else {
      $imageName = $idmember->image;
    }

    $data = [
      'id' => $this->request->getPost('id'),
      'image' => $imageName,
      'title' => $this->request->getPost('title'),
      'deskripsi' => $this->request->getPost('deskripsi'),
      'publish' => $this->request->getPost('publish'),
      'urutan' => $this->request->getPost('urutan'),
      'id_kategori' => $this->request->getPost('id_kategori'),
    ];
    if ($builder->replace($data)) {
      return redirect()->to('/admin/galeri');
    }
  }
  public function hapusgaleri($id)
  {
    $db      = \Config\Database::connect();
    $builder = $db->table('slider');

    $member = new GaleriModel();
    $data = $member->find($id);
    $imageFile = $data['image'];
    if (file_exists('public/img/' . $imageFile)) {
      unlink('public/img/' . $imageFile);
    }

    if ($builder->delete(['id' => $id])) {
      return redirect()->to('admin/galeri');
    }
  }

  //slider 
  public function slider()
  {
    $data['breadcrumbs_title'] = 'Koperasi';
    $data['breadcrumbs_item'] = 'Slider';
    $data['breadcrumbs_item2'] = 'Semua Slider';
    $data['menu_active'] = 'Slidersub';
    $data['menu_dropdown_open'] = 'Slider';
    $db      = \Config\Database::connect();
    $modelG = $db->query("SELECT * FROM ref_slider INNER JOIN slider ON slider.id_kategori=ref_slider.id WHERE menu='Slider' ");
    $data['data'] = $modelG->getResult();
    return view('admin/Slidersub', $data);
  }
  public function addslider()
  {
    $data['breadcrumbs_title'] = 'Koperasi';
    $data['breadcrumbs_item'] = 'Slider';
    $data['breadcrumbs_item2'] = 'Semua Slider';
    $data['menu_active'] = 'Slidersub';
    $data['menu_dropdown_open'] = 'Slider';

    $db      = \Config\Database::connect();
    $modelG = $db->query("SELECT * FROM ref_slider WHERE menu='Slider' ");
    $data['kategori'] = $modelG->getResult();
    return view('admin/tambah_slider', $data);
  }
  public function saveslider()
  {
    $model = model(GaleriModel::class);

    $file = $this->request->getFile('image');
    if ($file->isValid() && !$file->hasMoved()) {
      $imageName = $file->getRandomName();
      $file->move('public/img', $imageName);
    }

    if ($this->request->getVar('simpan')) {
      $model->save([
        'id' => $this->request->getPost('id'),
        'image' => $imageName,
        'title' => $this->request->getPost('title'),
        'deskripsi' => $this->request->getPost('deskripsi'),
        'publish' => $this->request->getPost('publish'),
        'urutan' => $this->request->getPost('urutan'),
        'id_kategori' => $this->request->getPost('id_kategori'),
      ]);
      return redirect()->to('/admin/slider');
    }
  }
  public function editslider($id)
  {
    $data['breadcrumbs_title'] = 'Koperasi';
    $data['breadcrumbs_item'] = 'Slider';
    $data['breadcrumbs_item2'] = 'Semua Slider';
    $data['menu_active'] = 'Slidersub';
    $data['menu_dropdown_open'] = 'Slider';

    $db      = \Config\Database::connect();
    $builder = $db->table('slider');
    $member = $builder->getWhere(['id' => $id])->getRow();
    $data['image'] = $member;
    return view('admin/edit_slider', $data);
  }
  public function updateslider()
  {
    $db      = \Config\Database::connect();
    $builder = $db->table('slider');

    $member = new GaleriModel();
    $idmember = $builder->select('*')->getWhere(['id' => $this->request->getVar('id')])->getRow();

    $file = $this->request->getFile('image');
    if ($file->getError() == 0) {
      if (!empty($idmember->image)) {
        unlink('public/img/' . $idmember->image);
      }
      $imageName = $file->getRandomName();
      $file->move('public/img', $imageName);
    } else {
      $imageName = $idmember->image;
    }

    $data = [
      'id' => $this->request->getPost('id'),
      'image' => $imageName,
      'title' => $this->request->getPost('title'),
      'deskripsi' => $this->request->getPost('deskripsi'),
      'publish' => $this->request->getPost('publish'),
      'urutan' => $this->request->getPost('urutan'),
      'id_kategori' => $this->request->getPost('id_kategori'),
    ];
    if ($builder->replace($data)) {
      return redirect()->to('/admin/slider');
    }
  }
  public function hapusslider($id)
  {
    $db      = \Config\Database::connect();
    $builder = $db->table('slider');

    $member = new GaleriModel();
    $data = $member->find($id);
    $imageFile = $data['image'];
    if (file_exists('public/img/' . $imageFile)) {
      unlink('public/img/' . $imageFile);
    }

    if ($builder->delete(['id' => $id])) {
      return redirect()->to('admin/slider');
    }
  }
}
