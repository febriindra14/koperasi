<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Detail Berita</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url('/public/FrontEnd'); ?>/css/style.css">
  </head>
  <body>
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">
        <img src="<?php echo base_url('public/FrontEnd');?>/images/logo.png" alt="Logo PRIMKOPPOL TRI SAKTI" width="70"
					style="float: left; margin-right: 10px;">
        </a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="<?= base_url('admin/halaman-depan'); ?>" class="nav-link" data-nav-section="home"><span>Home</span></a></li>
	          <li class="nav-item"><a href="index.html" class="nav-link" data-nav-section="about"><span>Profil</span></a></li>
	          <li class="nav-item"><a href="index.html" class="nav-link" data-nav-section="projects"><span>Galeri</span></a></li>
	          <li class="nav-item"><a href="index.html" class="nav-link" data-nav-section="about"><span>Berita</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('public/FrontEnd/images/bg_1.JPG');?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread"></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-lg-last ftco-animate">
            <?php if($post):?>
            <h2 class="mb-3"><?= $post->title;?></h2>
            <div class="row">
                <div class="input-field col m6 s12">
                  <div class="row section">
                    <div class="col s12 m8 l9">
                      <img height="250px"  src="<?php echo base_url('public/img/' . $post->featured_image); ?>" alt="materialize logos" />
                    </div>
                  </div>
                </div>
              </div>
            <p><?= $post->article; ?></p>
            <?php endif; ?>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading-sidebar">Kategori</h3>
              <hr>
              <?php $kategoriArray = array() ?>
              <?php foreach($kategori as $isi) : ?>
                <?php if(!in_array($isi->category_name,$kategoriArray)): ?>
                  <?php $kategoriArray[] = $isi->category_name ;?>
              <ul class="categories">
                <li><a href="#"><?= $isi->category_name; ?><span></span></a></li>
              </ul>
              <hr>
              <?php endif ; ?>
              <?php endforeach; ?>
            </div>
            <div class="sidebar-box ftco-animate">
            <h3 class="heading-sidebar">Terbaru</h3>
            <?php $jumlah = count($kategori) ?>
            <?php $beritaTerbaru = ($jumlah <= 5) ? $kategori : array_slice($kategori, 0, 5); ?>
            <?php foreach ($beritaTerbaru as $isi) : ?>
              <?php if($isi->id_posts != $post->id_posts) : ?>
                <div class="block-21 mb-4 d-flex">
                    <?php
                    $gambar = $isi->featured_image;
                    if ($gambar) {
                        $gambarUrl = base_url('public/img/' . $gambar);
                    } else {
                        $gambarUrl = base_url('public/img/default.jpg');
                    }
                    ?>
                    <a class="blog-img mr-4" style="background-image: url('<?= $gambarUrl; ?>');"></a>
                    <div class="text">
                        <h3 class="heading"><a href="<?php echo base_url('visi-misi/'.$isi->id_posts) ;?>"><?= $isi->title; ?></a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> <?= date(substr($isi->created, 0, -3)); ?> WIB</a></div>
                        </div>
                    </div>
                </div>
              <?php endif ; ?>
            <?php endforeach; ?>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
		

    <footer class="ftco-footer ftco-section" style="padding-bottom: 5px; padding-top: 40px;">
		
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">

					<a class=".ftco-footer-logo" href="index.html">
						<img src="<?php echo base_url('public/FrontEnd/images/logo.png'); ?>" alt="Logo PRIMKOPPOL TRI SAKTI" width="45"
							style="float: left; margin-right: 10px;">
					</a>


					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">PRIMKOPPOL "TRI SAKTI" <br>POLRES WONOSOBO</h2>
						<a href="#"><span class="text">Jl. Jolontoro No. 6, Kelurahan Wonosobo Barat, Kecamatan
								Wonosobo, Kabupaten Wonosobo, Propinsi Jawa Tengah.<br></span></a>
						<br>
						<a href=""><span class="icon-phone"></span><span class="text"> Telepon:
								0813-9292-0123</span></a> <br>
						<a href="#"><span class="ion-md-mail"></span><span class="text"> Email:
								primkopp.wsb@gmail.com</span></a></a>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Lokasi Kantor</h2>
						<div id="maps" style="height: 200px; border-radius: 20px; position: relative;"></div>
						<div class="map-overlay">
							<button id="streetViewButton" class="custom-button">Lihat di Google Street View</button>
							<button class="custom-button"><a id="directionsLink" href="#" target="_blank"
									class="custom-link">Menuju lokasi</a></button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script>
					</p>
					<a>PRIMKOPPOL "TRI SAKTI" POLRES WONOSOBO </a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/jquery.min.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/popper.min.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/aos.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/google-map.js"></script>
  <script src="<?php echo base_url('/public/FrontEnd'); ?>/js/main.js"></script>
  	<!--tambahan peta footer-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
	<script>
		var map = L.map('maps', {
			scrollWheelZoom: false, // Menonaktifkan zoom dengan scroll mouse
			zoomControl: false, // Menonaktifkan default zoom control Leaflet
			touchZoom: 'center' // Hanya mengaktifkan zoom pada sentuhan di tengah peta
		}).setView([-7.3685484, 109.8987094], 11);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
			maxZoom: 18,
		}).addTo(map);

		var marker = L.marker([-7.3685484, 109.8987094]).addTo(map);
		marker.bindTooltip("KANTOR  PRIMKOPPOL TRI SAKTI <br> POLRES WONOSOBO", {
			permanent: true,
			direction: 'top',
			className: 'marker-tooltip' // Menggunakan class "marker-tooltip" untuk gaya font
		}).openTooltip();

		var streetViewButton = document.getElementById("streetViewButton");
		streetViewButton.addEventListener("click", function () {
			var streetViewUrl = 'https://www.google.com/maps/@?api=1&map_action=pano&viewpoint=' + marker.getLatLng()
				.lat + ',' + marker.getLatLng().lng;
			window.open(streetViewUrl, "_blank");
		});

		var directionsLink = document.getElementById("directionsLink");
		directionsLink.href = 'https://www.google.com/maps/dir//' + marker.getLatLng().lat + ',' + marker.getLatLng().lng;

		// Membuat custom zoom control
		var zoomControl = L.control.zoom({
			position: 'bottomright' // Mengatur posisi control zoom di pojok kanan bawah
		}).addTo(map);
	</script>
    
  </body>
</html>