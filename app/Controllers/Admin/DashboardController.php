<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\GroupModel;

class DashboardController extends BaseController
{
    public function cekredirect()
    {
        $user = new User();
        $GroupModel = new GroupModel();
        $group = $GroupModel->getGroupsForUser(user_id());
        // print_r($group);
        // exit();

        if ($group[0]['name'] == 'santri') {
            $db      = \Config\Database::connect();
            $builder = $db->table('users');
            $id = session()->get('logged_in');
            $getNikFromUser = $builder->select('username')->getWhere(['id' => $id])->getRow();

            $santri = $db->table('santri');
            $getStep = $santri->select('step')->getWhere(['nik' => $getNikFromUser->username])->getRow()->step;

            switch ($getStep) {
                case NULL:
                    return redirect()->to('/pendaftaran/step-1');
                    break;
                case '0':
                    return redirect()->to('/pendaftaran/step-1');
                    break;
                case '1':
                    return redirect()->to('/pendaftaran/step-2');
                    break;
                case '2':
                    return redirect()->to('/pendaftaran/step-3');
                    break;
                case '3':
                    return redirect()->to('/pendaftaran/step-4');
                    break;

                default:
                    return redirect()->to(site_url('/santri'));
                    break;
            }
        } elseif ($group[0]['name'] == 'admin' || $group[0]['name'] == 'penguji' || $group[0]['name'] == 'pembayaran' || $group[0]['name'] == 'kamar') {
            return redirect()->to(site_url('/dashboard'));
        } elseif ($group[0]['name'] == 'validator') {
            return redirect()->to(site_url('/dashboard-validator'));
        } else {
            return redirect()->to(site_url('/'));
        }
    }

    public function indexvalidator()
    {

        $db      = \Config\Database::connect();
        $builder = $db->table('santri');
        $builder->from('santri');
        $jmlSantri = $builder->countAll();

        $jmlSantriValid = $db->query('select count(id) as jumlah from santri where is_valid = 1');
        $jmlSantriValid = $jmlSantriValid->getResultArray()[0]['jumlah'];
        $jmlSantriTes = $db->query('select count(id) as jumlah from santri where is_valid = 2');
        $jmlSantriTes = $jmlSantriTes->getResultArray()[0]['jumlah'];
        $jmlSantriBayar = $db->query('select count(id) as jumlah from santri where is_valid = 3');
        $jmlSantriBayar = $jmlSantriBayar->getResultArray()[0]['jumlah'];
        $jmlSantriTerima = $db->query('select count(id) as jumlah from santri where is_valid = 4');
        $jmlSantriTerima = $jmlSantriTerima->getResultArray()[0]['jumlah'];

        // MTs Pa
        $jmlSantriValidMTsPa = $db->query('select count(id) as jumlah from santri where is_valid is NULL AND ref_jenjang_id = 1 AND gender = "Laki-Laki" AND step = 4');
        $jmlSantriValidMTsPa = $jmlSantriValidMTsPa->getResultArray()[0]['jumlah'];
        $jmlSantriTesMTsPa = $db->query('select count(id) as jumlah from santri where is_valid = 1 AND ref_jenjang_id = 1 AND gender = "Laki-Laki" AND step = 4');
        $jmlSantriTesMTsPa = $jmlSantriTesMTsPa->getResultArray()[0]['jumlah'];
        $jmlSantriBayarMTsPa = $db->query('select count(id) as jumlah from santri where is_valid = 2 AND ref_jenjang_id = 1 AND gender = "Laki-Laki" AND step = 4');
        $jmlSantriBayarMTsPa = $jmlSantriBayarMTsPa->getResultArray()[0]['jumlah'];
        $jmlSantriTerimaMTsPa = $db->query('select count(id) as jumlah from santri where is_valid = 3 AND ref_jenjang_id = 1 AND gender = "Laki-Laki" AND step = 4');
        $jmlSantriTerimaMTsPa = $jmlSantriTerimaMTsPa->getResultArray()[0]['jumlah'];

        // MTs Pi
        $jmlSantriValidMTsPi = $db->query('select count(id) as jumlah from santri where is_valid is NULL AND ref_jenjang_id = 1 AND gender = "Perempuan"  AND step = 4');
        $jmlSantriValidMTsPi = $jmlSantriValidMTsPi->getResultArray()[0]['jumlah'];
        $jmlSantriTesMTsPi = $db->query('select count(id) as jumlah from santri where is_valid = 1 AND ref_jenjang_id = 1 AND gender = "Perempuan"  AND step = 4');
        $jmlSantriTesMTsPi = $jmlSantriTesMTsPi->getResultArray()[0]['jumlah'];
        $jmlSantriBayarMTsPi = $db->query('select count(id) as jumlah from santri where is_valid = 2 AND ref_jenjang_id = 1 AND gender = "Perempuan"  AND step = 4');
        $jmlSantriBayarMTsPi = $jmlSantriBayarMTsPi->getResultArray()[0]['jumlah'];
        $jmlSantriTerimaMTsPi = $db->query('select count(id) as jumlah from santri where is_valid = 3 AND ref_jenjang_id = 1 AND gender = "Perempuan"  AND step = 4');
        $jmlSantriTerimaMTsPi = $jmlSantriTerimaMTsPi->getResultArray()[0]['jumlah'];

        // MA Pa
        $jmlSantriValidMAPa = $db->query('select count(id) as jumlah from santri where is_valid is NULL AND ref_jenjang_id = 2 AND gender = "Laki-Laki"  AND step = 4');
        $jmlSantriValidMAPa = $jmlSantriValidMAPa->getResultArray()[0]['jumlah'];
        $jmlSantriTesMAPa = $db->query('select count(id) as jumlah from santri where is_valid = 1 AND ref_jenjang_id = 2 AND gender = "Laki-Laki"  AND step = 4');
        $jmlSantriTesMAPa = $jmlSantriTesMAPa->getResultArray()[0]['jumlah'];
        $jmlSantriBayarMAPa = $db->query('select count(id) as jumlah from santri where is_valid = 2 AND ref_jenjang_id = 2 AND gender = "Laki-Laki"  AND step = 4');
        $jmlSantriBayarMAPa = $jmlSantriBayarMAPa->getResultArray()[0]['jumlah'];
        $jmlSantriTerimaMAPa = $db->query('select count(id) as jumlah from santri where is_valid = 3 AND ref_jenjang_id = 2 AND gender = "Laki-Laki"  AND step = 4');
        $jmlSantriTerimaMAPa = $jmlSantriTerimaMAPa->getResultArray()[0]['jumlah'];

        // MA Pi
        $jmlSantriValidMAPi = $db->query('select count(id) as jumlah from santri where is_valid is NULL AND ref_jenjang_id = 2 AND gender = "Perempuan"  AND step = 4');
        $jmlSantriValidMAPi = $jmlSantriValidMAPi->getResultArray()[0]['jumlah'];
        $jmlSantriTesMAPi = $db->query('select count(id) as jumlah from santri where is_valid = 1 AND ref_jenjang_id = 2 AND gender = "Perempuan"  AND step = 4');
        $jmlSantriTesMAPi = $jmlSantriTesMAPi->getResultArray()[0]['jumlah'];
        $jmlSantriBayarMAPi = $db->query('select count(id) as jumlah from santri where is_valid = 2 AND ref_jenjang_id = 2 AND gender = "Perempuan"  AND step = 4');
        $jmlSantriBayarMAPi = $jmlSantriBayarMAPi->getResultArray()[0]['jumlah'];
        $jmlSantriTerimaMAPi = $db->query('select count(id) as jumlah from santri where is_valid = 3 AND ref_jenjang_id = 2 AND gender = "Perempuan"  AND step = 4');
        $jmlSantriTerimaMAPi = $jmlSantriTerimaMAPi->getResultArray()[0]['jumlah'];
        // ambil kuota tes dan pendaftar
        $kuotaTes = $db->query("SELECT jt.id, jt.tgl_tes,jt.sesi, COUNT(st.id) as jumlah, jt.kuota FROM jadwal_tes jt LEFT JOIN santri_tes st ON st.jadwal_tes_id = jt.id GROUP BY jt.id")->getResult();

        // ambil jml santri berdasarkan jenjang
        $getSantri = $db->query("SELECT * FROM santri")->getResult();
        $jmlMTsPa = 0;
        $jmlMTsPi = 0;
        $jmlMAPa = 0;
        $jmlMAPi = 0;
        foreach ($getSantri as $row) {
            if ($row->ref_jenjang_id == '1' && $row->gender == 'Laki-Laki') {
                $jmlMTsPa = $jmlMTsPa + 1;
            } elseif ($row->ref_jenjang_id == '1' && $row->gender == 'Perempuan') {
                $jmlMTsPi = $jmlMTsPi + 1;
            } elseif ($row->ref_jenjang_id == '2' && $row->gender == 'Laki-Laki') {
                $jmlMAPa = $jmlMAPa + 1;
            } else {
                $jmlMAPi = $jmlMAPi + 1;
            }
        }

        $data = [
            'breadcrumbs_title' => 'Dashboard',
            'breadcrumbs_item' => 'Administrator',
            'breadcrumbs_item2' => 'Halaman Dashboard',
            'menu_active' => 'dashboard',
            'menu_dropdown_open' => 'dashboard',
            'jmlSantri' => $jmlSantri,
            'jmlSantriValid' => $jmlSantriValid,
            'jmlSantriTes' => $jmlSantriTes,
            'jmlSantriBayar' => $jmlSantriBayar,
            'jmlSantriTerima' => $jmlSantriTerima,
            'jmlMTsPa' => $jmlMTsPa,
            'jmlMTsPi' => $jmlMTsPi,
            'jmlMAPa' => $jmlMAPa,
            'jmlMAPi' => $jmlMAPi,
            'jmlSantriValidMTsPa' => $jmlSantriValidMTsPa,
            'jmlSantriTesMTsPa' => $jmlSantriTesMTsPa,
            'jmlSantriBayarMTsPa' => $jmlSantriBayarMTsPa,
            'jmlSantriTerimaMTsPa' => $jmlSantriTerimaMTsPa,
            'jmlSantriValidMTsPi' => $jmlSantriValidMTsPi,
            'jmlSantriTesMTsPi' => $jmlSantriTesMTsPi,
            'jmlSantriBayarMTsPi' => $jmlSantriBayarMTsPi,
            'jmlSantriTerimaMTsPi' => $jmlSantriTerimaMTsPi,
            'jmlSantriValidMAPa' => $jmlSantriValidMAPa,
            'jmlSantriTesMAPa' => $jmlSantriTesMAPa,
            'jmlSantriBayarMAPa' => $jmlSantriBayarMAPa,
            'jmlSantriTerimaMAPa' => $jmlSantriTerimaMAPa,
            'jmlSantriValidMAPi' => $jmlSantriValidMAPi,
            'jmlSantriTesMAPi' => $jmlSantriTesMAPi,
            'jmlSantriBayarMAPi' => $jmlSantriBayarMAPi,
            'jmlSantriTerimaMAPi' => $jmlSantriTerimaMAPi,
            'kuotaTes' => $kuotaTes,
        ];

        return view('admin/dashboard_validator', $data);
    }

    public function index()
    {

        $data = [
            'breadcrumbs_title' => 'Dashboard',
            'breadcrumbs_item' => 'Administrator',
            'breadcrumbs_item2' => 'Halaman Dashboard',
            'menu_active' => 'dashboard',
            'menu_dropdown_open' => 'dashboard',
        ];

        return view('admin/dashboard', $data);
    }
}
