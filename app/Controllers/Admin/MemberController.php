<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MemberModel;

class MemberController extends BaseController
{
    public function index()
    {
        $data['breadcrumbs_title'] = 'Koperasi';
        $data['breadcrumbs_item'] = 'Member';
        $data['breadcrumbs_item2'] = 'Member';
        $data['menu_active'] = 'member';
        $data['menu_dropdown_open'] = '';
        $db      = \Config\Database::connect();
        $modelG = $db->query("SELECT * FROM pengurus ");
        $data['member'] = $modelG->getResult();

        return view('admin/member', $data);
    }
    public function addmember()
    {
        $data['breadcrumbs_title'] = 'Koperasi';
        $data['breadcrumbs_item'] = 'Member';
        $data['breadcrumbs_item2'] = 'Tambah Member';
        $data['menu_active'] = 'member';
        $data['menu_dropdown_open'] = '';

        $db      = \Config\Database::connect();
        $modelG = $db->query("SELECT * FROM pengurus");
        $data['member'] = $modelG->getResult();

        return view('admin/tambah_member', $data);
    }
    public function savemember()
    {
        $model = model(MemberModel::class);

        $file = $this->request->getFile('foto');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('public/img', $imageName);
        }

        if ($this->request->getVar('simpan')) {
            $model->save([
                'id' => $this->request->getPost('id'),
                'nama_pengurus' => $this->request->getPost('nama_pengurus'),
                'foto' => $imageName,
                'jabatan' => $this->request->getPost('jabatan'),
            ]);
            return redirect()->to('/admin/member');
        }
    }
    public function editmember($id)
    {
        $data['breadcrumbs_title'] = 'Koperasi';
        $data['breadcrumbs_item'] = 'Member';
        $data['breadcrumbs_item2'] = 'Edit Member';
        $data['menu_active'] = 'member';
        $data['menu_dropdown_open'] = '';

        $db      = \Config\Database::connect();

        $builder = $db->table('pengurus');
        $member = $builder->getWhere(['id' => $id])->getRow();
        $data['member'] = $member;

        return view('admin/edit_member', $data);
    }
    public function updatemember()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pengurus');

        $member = new MemberModel();
        $idmember = $builder->select('*')->getWhere(['id' => $this->request->getVar('id')])->getRow();

        $file = $this->request->getFile('foto');
        if ($file->getError() == 0) {
            if (!empty($idmember->foto)) {
                unlink('public/img/' . $idmember->foto);
            }
            $imageName = $file->getRandomName();
            $file->move('public/img', $imageName);
        } else {
            $imageName = $idmember->foto;
        }

        $data = [
            'id' => $this->request->getVar('id'),
            'nama_pengurus' => $this->request->getPost('nama_pengurus'),
            'foto' => $imageName,
            'jabatan' => $this->request->getPost('jabatan'),
        ];
        if ($builder->replace($data)) {
            return redirect()->to('/admin/member');
        }
    }


    public function hapusmember($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pengurus');

        $member = new MemberModel();
        $data = $member->find($id);
        $imageFile = $data['foto'];
        if (file_exists('public/img/' . $imageFile)) {
            unlink('public/img/' . $imageFile);
        }

        if ($builder->delete(['id' => $id])) {
            return redirect()->to('admin/member');
        }
    }
}
