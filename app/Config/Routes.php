<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// PENDAFTAR CALON SANTRI
//]$routes->get('/', 'Home::index');
$routes->get('/', 'Admin\BeritaController::viewBerita');

//login
$routes->get('/auth/login', 'Auth::login');


// ['filter' => 'role:admin,superadmin']
$routes->get('/cek-dashboard', 'Admin\DashboardController::cekredirect');
$routes->get('/dashboard', 'Admin\DashboardController::index', ['as' => 'halaman-dashboard', 'filter' => 'role:admin,validator,penguji,pembayaran,kamar']);

// ref_slider
$routes->get('/admin/galeri-kategori', 'Admin\GaleriController::kategorigaleri/Galeri', ['as' => 'galeri-kategori']);
$routes->get('/admin/slider-kategori', 'Admin\GaleriController::kategorigaleri/Slider', ['as' => 'slider-kategori']);
$routes->get('/admin/tambah-kategori', 'Admin\GaleriController::addkategori/Galeri', ['as' => 'tambah-kategori']);
$routes->get('/admin/tambah-kategori-slider', 'Admin\GaleriController::addkategori/Slider', ['as' => 'tambah-kategori-slider']);
$routes->get('/admin/edit-kategori/(:segment)', 'Admin\GaleriController::editkategori/$1/Galeri', ['as' => 'edit-kategori']);
$routes->get('/admin/edit-kategori-slider/(:segment)', 'Admin\GaleriController::editkategori/$1/Slider', ['as' => 'edit-kategori-slider']);
$routes->get('/admin/hapus-kategori/(:segment)', 'Admin\GaleriController::hapuskategori/$1/Galeri', ['as' => 'hapus-kategori']);
$routes->get('/admin/hapus-kategori-slider/(:segment)', 'Admin\GaleriController::hapuskategori/$1/Slider', ['as' => 'hapus-kategori-slider']);
$routes->post('/admin/simpan-kategori', 'Admin\GaleriController::savekategori/Galeri', ['as' => 'simpan-kategori']);
$routes->post('/admin/simpan-kategori-slider', 'Admin\GaleriController::savekategori/Slider', ['as' => 'simpan-kategori-slider']);
$routes->post('/admin/update-kategori', 'Admin\GaleriController::updatekategori/Galeri', ['as' => 'update-kategori']);
$routes->post('/admin/update-kategori-slider', 'Admin\GaleriController::updatekategori/Slider', ['as' => 'update-kategori-slider']);

//halaman kategori berita
$routes->get('/admin/kategori-berita', 'Admin\KategoriController::kategoriBerita', ['as' => 'kategori-berita', 'filter' => 'role:admin']);
$routes->get('/admin/tambah-kategori-berita', 'Admin\KategoriController::createKategori', ['as' => 'tambah-kategori-berita']);
$routes->get('/admin/edit-kategori-berita/(:segment)', 'Admin\KategoriController::editKategoriBerita/$1', ['as' => 'edit-kategori-berita']);
$routes->get('/admin/hapus-kategori-berita/(:num)', 'Admin\KategoriController::deleteKategori/$1', ['as' => 'hapus-kategori-berita']);
$routes->post('/admin/simpan-kategori-berita', 'Admin\KategoriController::saveKategoriBerita', ['as' => 'simpan-kategori-berita']);
$routes->post('/admin/update-kategori-berita', 'Admin\KategoriController::updateKategori', ['as' => 'update-kategori-berita']);

//halaman  berita
$routes->get('/admin/berita', 'Admin\BeritaController::Berita', ['as' => 'berita']);
$routes->get('/admin/tambah-berita', 'Admin\BeritaController::createBerita', ['as' => 'tambah-berita']);
$routes->get('/admin/hapus-berita/(:num)', 'Admin\BeritaController::deleteBerita/$1', ['as' => 'hapus-berita']);
$routes->get('/admin/edit-berita/(:num)', 'Admin\BeritaController::editBerita/$1', ['as' => 'edit-berita']);
$routes->post('/admin/update-berita', 'Admin\BeritaController::updateBerita', ['as' => 'update-berita']);
$routes->post('/admin/simpan-berita', 'Admin\BeritaController::saveBerita', ['as' => 'simpan-berita']);
//halaman detail berita
$routes->get('/admin/detail-halaman/(:num)', 'Admin\BeritaController::detailBerita/$1', ['as' => 'detail-halaman']);
$routes->get('/admin/halaman-depan', 'Admin\BeritaController::viewBerita', ['as' => 'halaman-depan']);

//halaman visi-misi
$routes->get('/admin/visi','Admin\BeritaController::visiMisi',['as'=> 'visi']);
$routes->get('/admin/edit-visi/(:num)','Admin\BeritaController::editVisiMisi/$1',['as'=> 'edit-visi']);
$routes->post('/admin/update-visi','Admin\BeritaController::updateVisiMisi',['as'=> 'update-visi']);
// $routes->post('/admin/simpan-bidang-visi', 'Admin\BeritaController::saveBidangVisi', ['as' => 'simpan-bidang-visi']);
// $routes->get('/admin/tambah-bidang-visi','Admin\BeritaController::tambahBidangVisi',['as'=> 'tambah-bidang-visi']);



//bidang usaha
$routes->get('/admin/bidang-usaha','Admin\BeritaController::bidangUsaha',['as'=> 'bidang-usaha']);
$routes->get('/admin/tambah-bidang-usaha','Admin\BeritaController::tambahBidangUsaha',['as'=> 'tambah-bidang-usaha']);
$routes->get('/admin/edit-bidang-usaha/(:num)','Admin\BeritaController::editBidangUsaha/$1',['as'=> 'edit-bidang-usaha']);
$routes->get('/admin/delete-bidang-usaha/(:num)','Admin\BeritaController::deleteBidangUsaha/$1',['as'=> 'delete-bidang-usaha']);
$routes->post('/admin/simpan-bidang-usaha', 'Admin\BeritaController::saveBidangUsaha', ['as' => 'simpan-bidang-usaha']);
$routes->post('/admin/update-bidang-usaha','Admin\BeritaController::updateBidangUsaha',['as'=> 'update-bidang-usaha']);


// galeri 
$routes->get('/admin/galeri', 'Admin\GaleriController::galeri', ['as' => 'galeri']);
$routes->get('/admin/tambah-galeri', 'Admin\GaleriController::addgaleri', ['as' => 'tambah-galeri']);
$routes->get('/admin/edit-galeri/(:segment)', 'Admin\GaleriController::editgaleri/$1', ['as' => 'edit-galeri']);
$routes->get('/admin/hapus-galeri/(:segment)', 'Admin\GaleriController::hapusgaleri/$1', ['as' => 'hapus-galeri']);
$routes->post('/admin/simpan-galeri', 'Admin\GaleriController::savegaleri', ['as' => 'simpan-galeri']);
$routes->post('/admin/update-galeri', 'Admin\GaleriController::updategaleri', ['as' => 'update-galeri']);
// slider
$routes->get('/admin/slider', 'Admin\GaleriController::slider', ['as' => 'slider']);
$routes->get('/admin/tambah-slider', 'Admin\GaleriController::addslider', ['as' => 'tambah-slider']);
$routes->get('/admin/edit-slider/(:segment)', 'Admin\GaleriController::editslider/$1', ['as' => 'edit-slider']);
$routes->get('/admin/hapus-slider/(:segment)', 'Admin\GaleriController::hapusslider/$1', ['as' => 'hapus-slider']);
$routes->post('/admin/simpan-slider', 'Admin\GaleriController::saveslider', ['as' => 'simpan-slider']);
$routes->post('/admin/update-slider', 'Admin\GaleriController::updateslider', ['as' => 'update-slider']);


//member
$routes->get('/admin/member', 'Admin\MemberController::index', ['as' => 'member']);
$routes->get('/admin/tambah-member', 'Admin\MemberController::addmember', ['as' => 'tambah-member']);
$routes->post('/admin/simpan-member', 'Admin\MemberController::savemember', ['as' => 'simpan-member']);
$routes->get('/admin/edit-member/(:segment)', 'Admin\MemberController::editmember/$1', ['as' => 'edit-member']);
$routes->get('/admin/hapus-member/(:segment)', 'Admin\MemberController::hapusmember/$1', ['as' => 'hapus-member']);
$routes->post('/admin/update-member', 'Admin\MemberController::updatemember', ['as' => 'update-member']);

//kontak
$routes->get('/admin/kontak', 'Admin\KontakController::index', ['as' => 'kontak']);
$routes->get('/admin/edit-kontak/(:segment)', 'Admin\KontakController::editkontak/$1', ['as' => 'edit-kontak']);
$routes->post('/admin/update-kontak', 'Admin\KontakController::updatekontak', ['as' => 'update-kontak']);







/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
