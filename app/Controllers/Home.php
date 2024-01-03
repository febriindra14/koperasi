<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $modelG = $db->query("SELECT * FROM kontak");
        $data['kontak'] = $modelG->getFirstRow();

        $modelG = $db->query("SELECT * FROM ref_slider INNER JOIN slider ON slider.id_kategori=ref_slider.id WHERE menu='Slider' ");
        $data['produk'] = $modelG->getResult();

        $modelG = $db->query("SELECT * FROM ref_slider INNER JOIN slider ON slider.id_kategori=ref_slider.id WHERE menu='Galeri' ORDER BY urutan ASC ");
        $data['kegiatan'] = $modelG->getResult();

        return view('admin/halaman_depan', $data);
    }

    public function daftar()
    {
        $db      = \Config\Database::connect();

        // cek jumlah pendaftar apakah sdah melebihi kuota
        $JadwalUjian = $db->query("SELECT kuota FROM jadwal_tes ")->getResult();
        $kuotaJadwalUjian = 0;
        foreach ($JadwalUjian as $row) {
            $kuotaJadwalUjian = $kuotaJadwalUjian + $row->kuota;
        }
        $getJmlPendaftar = $db->query("SELECT count(id) as jumlah FROM santri ")->getRow()->jumlah;
        if ($getJmlPendaftar < $kuotaJadwalUjian) {
            // cek tahun ajaran is_open
            $refTaAktif = $db->query("SELECT rj.id, rt.tahun, rj.jenis_pendaftaran, rj.is_active, rj.is_open FROM ref_jenispendaftaran rj, ref_tahun rt WHERE rj.ref_tahun_id = rt.id AND rj.is_active = '1' ");
            $TaAktif = $refTaAktif->getRow()->is_open;
            if ($TaAktif == '1') {
                return redirect()->to('/register');
            } else {
                return view('home/pages/coming_pages');
            }
        } else {
            return view('home/pages/coming_pages');
        }
    }

    public function user()
    {
        return view('santri/index');
    }
}
