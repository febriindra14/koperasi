<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KontakModel;

class KontakController extends BaseController
{
    public function index()
    {
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'kontak';
        $data['menu_dropdown_open'] = '';
        $db      = \Config\Database::connect();
        $modelG = $db->query("SELECT * FROM kontak");
        $data['kontak'] = $modelG->getResult();

        return view('admin/kontak', $data);
    }
    public function editkontak($id)
    {
        $data['breadcrumbs_title'] = 'Kontak';
        $data['breadcrumbs_item'] = 'Kontak';
        $data['breadcrumbs_item2'] = 'Daftar Kontak';
        $data['menu_active'] = 'kontak';
        $data['menu_dropdown_open'] = '';

        $db      = \Config\Database::connect();
        $modelG = $db->query("SELECT * FROM kontak ORDER BY id ");
        $data['Kontak'] = $modelG->getResult();

        $builder = $db->table('kontak');
        $kontak = $builder->getWhere(['id' => $id])->getRow();
        $data['kontak'] = $kontak;

        return view('admin/edit_kontak', $data);
    }

    public function updatekontak()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('kontak');

        $member = new KontakModel();
        $idmember = $builder->select('*')->getWhere(['id' => $this->request->getVar('id')])->getRow();

        $file = $this->request->getFile('logo');
        if ($file->getError() == 0) {
            if (!empty($idmember->logo)) {
                unlink('public/img/' . $idmember->logo);
            }
            $imageName = $file->getRandomName();
            $file->move('public/img', $imageName);
        } else {
            $imageName = $idmember->logo;
        }

        $data = [
            'id' => $this->request->getVar('id'),
            'fb' => $this->request->getPost('fb'),
            'twitter' => $this->request->getPost('twitter'),
            'ig' => $this->request->getPost('ig'),
            'telpon' => $this->request->getPost('telpon'),
            'wa' => $this->request->getPost('wa'),
            'email' => $this->request->getPost('email'),
            'logo' => $imageName,
            'nama_web' => $this->request->getPost('nama_web'),
        ];
        if ($builder->replace($data)) {
            return redirect()->to('admin/kontak');
        }
    }
}
