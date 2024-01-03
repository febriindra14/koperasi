<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>Primkoppol Tri Sakti</title>

  <?= $this->include('admin/layout/style') ?>

</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

  <!-- BEGIN: Header-->
  <?= $this->include('admin/layout/header') ?>
  <!-- END: Header-->
  <!-- BEGIN: SideNav-->
  <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
      <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><img class="hide-on-med-and-down" src="<?php echo base_url('public/FrontEnd/images/logo'); ?>.png" /><img class="show-on-medium-and-down hide-on-med-and-up" src="<?php echo base_url('public/FrontEnd/images/logo'); ?>.png" alt="materialize logos" /><span class="logo-text hide-on-med-and-down">Koperasi</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
      <!-- <li class="bold"><a class='<?php echo ($menu_active == 'dashboard' ? 'active gradient-shadow teal' : ''); ?>' href="<?= url_to('halaman-dashboard'); ?>" class=" waves-effect waves-cyan">
          <i class="material-icons">settings_input_svideo</i>
          <span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
      </li> -->

      <li class="navigation-header"><a class="navigation-header-text">Koperasi</a>
        <i class="navigation-header-icon material-icons">more_horiz</i>
      </li>


      <li class="bold  <?php echo ($menu_dropdown_open == 'Berita' ? 'open active' : ''); ?>"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">content_paste</i>
          <span class="menu-title" data-i18n="Pages">Berita</span></a>
        <ul class="collapsible-body ">
          <li><a class='<?php echo ($menu_active == 'Kategori-berita' ? 'active  content-wrapper-before gradient-45deg-indigo-blue' : ''); ?>' href="<?= url_to('kategori-berita'); ?> "><i class="material-icons ">radio_button_unchecked</i>
              <span data-i18n="Kategori">Kategori</span></a></li>
          <li><a class='<?php echo ($menu_active == 'berita' ? 'active  content-wrapper-before gradient-45deg-indigo-blue' : ''); ?>' href="<?= url_to('berita'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="List-berita">List Berita</span></a></li>
            <li><a class='<?php echo ($menu_active == 'visi-misi' ? 'active  content-wrapper-before gradient-45deg-indigo-blue' : ''); ?>' href="<?= url_to('visi'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="List-berita">Visi Misi</span></a></li>
               <li><a class='<?php echo ($menu_active == 'bidang-usaha' ? 'active  content-wrapper-before gradient-45deg-indigo-blue' : ''); ?>' href="<?= url_to('bidang-usaha'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="List-berita">Bidang Usaha</span></a></li>
        </ul>
      </li>

      <li class="bold"><a class="waves-effect waves-cyan <?php echo ($menu_active == 'member' ? 'active  content-wrapper-before gradient-45deg-indigo-blue' : ''); ?>" href="<?= url_to('member'); ?>"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">Anggota Koperasi</span></a>
      </li>

      <li class="bold  <?php echo ($menu_dropdown_open == 'Galeri' ? 'open active' : ''); ?>"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">photo_library</i>
          <span class="menu-title" data-i18n="Pages">Galeri</span></a>
        <ul class="collapsible-body">
          <li><a class='<?php echo ($menu_active == 'Galeri' ? 'active content-wrapper-before gradient-45deg-indigo-blue' : ''); ?>' href="<?= url_to('galeri-kategori'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Contact">Kategori Galeri</span></a></li>
          <li><a class='<?php echo ($menu_active == 'Galerisub' ? 'active content-wrapper-before gradient-45deg-indigo-blue' : ''); ?>' href="<?= url_to('galeri'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Contact">Semua Galeri</span></a></li>
        </ul>
      </li>

      <li class="bold  <?php echo ($menu_dropdown_open == 'Slider' ? 'open active' : ''); ?>"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">slideshow</i>
          <span class="menu-title" data-i18n="Pages">Produk</span></a>
        <ul class="collapsible-body">
          <li><a class='<?php echo ($menu_active == 'Slider' ? 'active content-wrapper-before gradient-45deg-indigo-blue' : ''); ?>' href="<?= url_to('slider-kategori'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Contact">Kategori Produk</span></a></li>
          <li><a class='<?php echo ($menu_active == 'Slidersub' ? 'active content-wrapper-before gradient-45deg-indigo-blue' : ''); ?>' href="<?= url_to('slider'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Contact">Semua Produk</span></a></li>
        </ul>
      </li>

      <li class="bold"><a class="waves-effect waves-cyan <?php echo ($menu_active == 'kontak' ? 'active content-wrapper-before gradient-45deg-indigo-blue' : ''); ?>" href="<?= url_to('kontak'); ?>"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">Kontak</span></a>
      </li>

      <li class="bold"><a class="waves-effect waves-cyan " href="<?= base_url('logout') ?>"><i class="material-icons">lock</i><span class="menu-title" data-i18n="User Profile">Logout</span></a>
      </li>



    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect content-wrapper-before gradient-45deg-indigo-blue waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
  </aside>
  <!-- END: SideNav-->



  <!-- BEGIN: SideNav-->

  <!-- END: SideNav-->

  <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="row">
      <div class="content-wrapper-before gradient-45deg-indigo-blue"></div>
      <div class="breadcrumbs-dark pb-0 gradient-45deg-indigo-blue " id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
          <div class="row">
            <div class="col s10 m6 l6">
              <h5 class="breadcrumbs-title mt-0 mb-0 "><span><?php echo $breadcrumbs_title; ?></span></h5>
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="#"><?php echo $breadcrumbs_item; ?></a>
                </li>
                <li class="breadcrumb-item"><a href="#"><?php echo $breadcrumbs_item2; ?></a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 gradient-45deg-indigo-blue">
        <div class="container ">
          <div class="section">
            <?php $this->renderSection('content') ?>
          </div>
        </div>
      </div><!-- START RIGHT SIDEBAR NAV -->

    </div>
    <div class="content-overlay"></div>
  </div>
  </div>
  </div>
  <!-- END: Page Main-->



  <!-- BEGIN: Footer-->
  <?= $this->include('admin/layout/footer') ?>

</body>

</html>