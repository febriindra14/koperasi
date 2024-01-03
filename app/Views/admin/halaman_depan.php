<!DOCTYPE html>
<html lang="en">

<head>
	<title>PRIMKOPPOL TRI SAKTI POLRES WONOSOBO</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="<?php echo base_url('/public/FrontEnd/'); ?>/images/logo.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/FrontEnd'); ?>/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/FrontEnd'); ?>/css/animate.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/FrontEnd'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/FrontEnd'); ?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/FrontEnd'); ?>/css/magnific-popup.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/FrontEnd'); ?>/css/aos.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/FrontEnd'); ?>/css/ionicons.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/FrontEnd'); ?>/css/flaticon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/FrontEnd'); ?>/css/icomoon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/FrontEnd'); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/FrontEnd'); ?>/css/css/custom.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />

</head>

<header>
	<div class="contact-info" style="color: black">
		<?php if($kontak) : ?>
		<span><i class="icon-envelope"></i> Email: <?= $kontak->email; ?> </span>
		<span class="divider"></span>
		<span><i class="icon-phone"></i> Nomor Telepon: <?= $kontak->telpon; ?> </span>
		<?php endif; ?>
	</div>
</header>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<div>
				<img src="<?php echo base_url('public/FrontEnd'); ?>/images/logo.png" alt="Logo PRIMKOPPOL TRI SAKTI" width="70" style="float: left; margin-right: 10px;"> 
			</div>
			<div>
				<span class="navbar-brand" style="padding-bottom: 0px; ">PRIMKOPPOL TRI SAKTI</span>
				<br>
				<a class="navbar-brand" style="color:white; font-size:medium; font-weight: 500; padding-top: 0px">POLRES
					WONOSOBO</a>
			</div>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" style="font-size: medium; font-weight: 700;">Menu </button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<!--<li class="nav-item"><a href="#" class="nav-link" data-nav-section="home"><span></span></a></li>-->
					<li class="nav-item"><a href="#" class="nav-link" style="font-size:12pt" data-nav-section="about"><span>Profil koperasi</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link" style="font-size: 12pt" data-nav-section="projects"><span>Bidang Usaha dan layanan</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link" style="font-size: 12pt" data-nav-section="team"><span>Produk Koperasi</span></a></li>
					<!--<li class="nav-item"><a href="#" class="nav-link" data-nav-section="testimony"><span></span></a></li>-->
					<li class="nav-item"><a href="#" class="nav-link" style="font-size: 12pt" data-nav-section="blog"><span>Kegiatan</span></a></li>
			    	

				
					<!--<li class="nav-item"><a href="#" class="nav-link" data-nav-section="contact"><span></span></a></li>-->
					<!--<li class="nav-item cta mb-4">
				<a href="https://api.whatsapp.com/send?phone=nomor kontak" class="nav-link">Kontak</a>-->
					


				</ul>
			</div>
			<a href="<?= base_url('/'); ?>/login" class="btn btn-info">Login</a>
		</div>
	</nav>
	<section class="hero-wrap js-fullheight" style="background-color: #000" data-section="home">
		<!--<section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-section="home">-->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="<?php echo base_url('public/FrontEnd'); ?>/images/bg_1.JPG" alt="Slide 1">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo base_url('public/FrontEnd'); ?>/images/bg_2s.JPG" alt="Slide 2">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo base_url('public/FrontEnd'); ?>/images/bg_3.JPG" alt="Slide 3">
				</div>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<div class="overlay" style="pointer-events: none;">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
				<div class="col-md-8 ftco-animate mt-5" style="margin-left: 100px" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
					<!--<p class="d-flex align-items-center">
						<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
							<span class="ion-ios-play play mr-2"></span>
							<span class="watch">Watch Video</span>
						</a>
					</p>-->
					<h1 class="mb-4" style="font-weight: 700;">
						<span id="typed-text"></span>
					</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-services ftco-no-pt">
		<div class="container">
			<div class="row services-section">
				<div class="col-md-4 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services text-left d-block">
						<div class="media-body" style="text-align: center;">
							<h3 class="heading mb-3" style="font-weight: 700; text-align: center;"><?= $visi->title; ?></h3>
							<a class="hidden-text"><?= $visi->excerpt; ?></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services text-left d-block">
						<div class="media-body">
							<h3 class="heading mb-3" style="font-weight: 700; text-align: center;"><?= $misi->title; ?></h3>
							<a class="hidden-text">
								<?= $misi->excerpt; ?>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services text-left d-block">
						<div class="media-body">
							<h3 class="heading mb-3" style="font-weight: 700; text-align: center;"><?= $bidangUsaha->title; ?></h3>
							<a class="hidden-text"><?= $bidangUsaha->excerpt; ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
		<div class="container">
			<div class="row d-flex">
				<div class="img col-md-6 col-lg-4 d-flex align-self-stretch align-items-center" style=" background-image:url('<?php echo base_url('public/FrontEnd/images/bg_3.JPG') ?>');">
					<div class="d-flex align-self-stretch align-items-center">
						<div class="request-quote py-5">
							<div class="py-2">
								<span class="subheading"> PRIMKOPPOL </span>
								<h3> TRI SAKTI </h3>
								<h3> POLRES WONOSOBO </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-8 pl-lg-5 py-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<span class="subheading">Profile Koperasi</span>
							<h2 class="mb-4">PRIMKOPPOL TRI SAKTI POLRES WONOSOBO</h2>
								<h2 class="mb-4"><?= $profile->title; ?></h2>
								<p><?= $profile->excerpt; ?></p>
								<p></p>
								<p></p>
								<a href="<?= base_url('/'); ?>/admin/detail-halaman/<?= $profile->id_posts; ?>" class="btn btn-info">Baca Berita Selengkapnya</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="brand-partner" style=" padding-bottom: 0px">
			<h2 style="font-size: 16px; display: block; 
				text-transform: uppercase;
				color: #fd7e14;
				letter-spacing: 2px;">Brand Partner</h2>
			<div class="slider" >
			  <div class="slide-track">
				<div class="logo-container">
				  <img src="<?php echo base_url('public/Template'); ?>/images/partner/bank-wonsobo.jpeg" alt="">
				  <img src="<?php echo base_url('public/Template'); ?>/images/partner/Bank_Jateng_logo.svg.png" alt="" >
				  <img src="<?php echo base_url('public/Template'); ?>/images/partner/BRI_2020.png" alt="" style="height: 30px;">
				  <img src="<?php echo base_url('public/Template'); ?>/images/partner/sinarmas-wnsb.jpg" alt="">
				  <span style="font-weight: 500;">TOKO SINAR MAS WONOSOBO</span>
				  <span style="font-weight: 500;">SERAYU SELULER WONOSOBO</span>
				  <span style="font-weight: 500;">TOKO CANTIK SELULER WONOSOBO</span>
				  <!-- Tambahkan logo lainnya di sini -->
				</div>
				<div class="logo-container">
					<img src="<?php echo base_url('public/Template'); ?>/images/partner/bank-wonsobo.jpeg" alt="">
					<img src="<?php echo base_url('public/Template'); ?>/images/partner/Bank_Jateng_logo.svg.png" alt="">
					<img src="<?php echo base_url('public/Template'); ?>i/mages/partner/BRI_2020.png" alt="" style="height: 30px;">
					<img src="<?php echo base_url('public/Template'); ?>/images/partner/sinarmas-wnsb.jpg" alt="">
					<span style="font-weight: 500;">TOKO SINAR MAS WONOSOBO</span>

					<span style="font-weight: 500;">SERAYU SELULER WONOSOBO</span>
					<span style="font-weight: 500;">TOKO CANTIK SELULER WONOSOBO</span>

					<!-- Tambahkan logo lainnya di sini -->
				  </div>
			  </div>
			</div>
		  </section>
	    </section>
	<br>
	<hr style="border-color: #ccc; border-width: 2px; margin: 20px 10%;">
	<section class="testimony-section" data-section="projects">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Bidang Usaha</span>
					<h2 class="mb-4">Unit Simpan Pinjam</h2>
					<p class="mb-4" style="color: #2e2e2e;">Koperasi Primkoppol memiliki bidang usaha Unit Simpan Pinjam <br>yang memberikan pinjaman untuk beberapa keperluan, antara lain:</p>
					<div class="card-deck">
					    <?php $counter = 0;  ?>
					    <?php foreach($bidus as $isi) : ?>
						<div class="card ftco-animate" style="border-color: #ffa703; border-radius: 10px;">
							<div class="card-body">
								<span class="position mb-2"></span>
								<h4><i class="icon-home"></i></h4>
                                
								<h5 class="mb-4"><?= $isi->title ; ?></h5>

								<div class="faded">
									<p><?= $isi->excerpt ; ?></p>
								</div>
							</div>
						</div>
					<?php $counter++; ?>
                    <?php if ($counter % 3 === 0) : ?>
                        <div class="w-100"></div> 
                        <br>
                    <?php endif; ?>
					<?php endforeach ; ?>
					</div>
				</div>
			</div>
		</div>
		<br>
		<hr style="border-color: #ccc; border-width: 2px; margin: 20px 10%;">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Bidang Usaha</span>
					<h2 class="mb-4">Unit Toko</h2>
					<p class="mb-4" style="color: #2e2e2e">Koperasi Primkoppol memiliki bidang usaha Unit Toko <br>yang menjual beberapa keperluan rumah tangga, antara lain:</p>
					<div class="card-deck">
						<div class="card ftco-animate" style="border-color: #ffa703; border-radius: 10px;">
							<div class="card-body">
								<span class="position mb-2"></span>
								<h4 ><i class="icon-shopping-bag"></i></h4>
								<h5 class="mb-4">1.	Menyediakan 9 bahan pokok</h5>
								<div class="faded">
									<p>Menjual bahan-bahan pokok seperti beras, gula, dll</p>
									
								</div>
							</div>
						</div>
						<div class="card ftco-animate" style="border-color: #ffa703; border-radius: 10px;">
							<div class="card-body">
								<span class="position mb-2"></span>
								<h4 ><i class="icon-shopping-cart"></i></h4>
								<h5 class="mb-4">2. Melayani barang sandang (pakaian)</h5>
								
								<div class="faded">
									<p>Menjual Pakaian, baju, pakaian anak dll</p>
									
								</div>
							</div>
						</div>
						<div class="card ftco-animate" style="border-color: #ffa703; border-radius: 10px;">
							<div class="card-body">
								<span class="position mb-2"></span>
								<h4 ><i class="icon-tv"></i></h4>

								<h5 class="mb-4">3.	Barang-barang elektronik</h5>

								<div class="faded">
									<p>TV, Mesin Cuci, Lemari Es, HP, Laptop dll</p>
									
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="card-deck">
						<div class="card ftco-animate" style="border-color: #ffa703; border-radius: 10px;">
							<div class="card-body">
								<span class="position mb-2"></span>
								<h4 ><i class="ion-ios-home"></i></h4>

								<h5 class="mb-4">4.	Pembelian barang bahan bangunan</h5>
								<div class="faded">
									<p>menjual barang bahan bangunan</p>
									
								</div>
							</div>
						</div>
						<div class="card ftco-animate" style="border-color: #ffa703; border-radius: 10px;">
							<div class="card-body">
								<span class="position mb-2"></span>
								<h4 ><i class="icon-motorcycle"></i></h4>

								<h5 class="mb-4">5.	Melayani kredit sepeda motor</h5>
								<div class="faded">
									<p>Melayani kredit kendaraan bermotor</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<section class="ftco-section ftco-project bg-light" data-section="team">
		<hr style="border-color: #ccc; border-width: 2px; margin: 20px 10%;">

		<div class="container-fluid">
			<div class="row justify-content-center pb-2">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Unit Toko</span>
					<h2 class="mb-4">Produk Kami</h2>
					<p style="color: #2e2e2e">Koperasi menjual beragam keperluan diantaranya:</p>
				</div>
			</div>
				<div class="col-md-12 testimonial">
					<div class="carousel-project owl-carousel">
					    <?php foreach ($produk as $row) : ?>
						<div class="item">
							<div class="project">
								<div class="img">
									<img src="<?= base_url('public/img/' . $row->image); ?>" class="img-fluid" alt="Colorlib Template">
									<a href="<?= base_url('public/img/' . $row->image); ?>" class="icon image-popup d-flex justify-content-center align-items-center">
										
									</a>
								</div>
								<div class="text px-4">
									<h3><a href="#"><?= $row->kategori; ?></a></h3>
									<span><?= $row->deskripsi; ?></span>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	</section>
    
    <hr style="border-color: #ccc; border-width: 2px; margin: 20px 10%;">
    
    <section class="ftco-section" data-section="blog">
		<div class="container">
		  <div class="row justify-content-center">
			<div class="col-md-7 heading-section text-center ftco-animate">
			  <span class="subheading">Kegiatan Koperasi</span>
			  <h2 class="mb-4">Foto Kegiatan</h2>
			</div>
		  </div>
			<div class="col-md-12">

			  <div class="photo-details ">
				<figure>
                  <div class="position-relative">
                      			                   	     <?php foreach ($kegiatan as $row) : ?>

                <img id="main-image" src="" alt="" class="image-popup"  href="<?= base_url('public/img/' . $row->image); ?>">
           
                    				  			        <?php endforeach; ?>

                    <figcaption id="caption" style="margin-bottom: 25px; margin-right: 10px; font-size: max(2vw, 14px);"></figcaption>
                    <div class="year-overlay" style="margin-bottom: 0px;">
                      <span id="year"></span>
                    </div>
                  </div>
                </figure>
                </div>

				  <div class="row">
			  <div class="col-md-1" style="padding: 0px;">
				<button class="arrow arrow-prev"><i class="fas fa-chevron-left"></i></button>
				<button class="arrow arrow-next"><i class="fas fa-chevron-right"></i></button>
			</div>

			<div class="col-md">
				<div class="carousel__thumbnails">
				  <ul id="thumbnail-slider">
					<?php foreach ($kegiatan as $row) : ?>
						<li>
							<img src="<?= base_url('public/img/' . $row->image); ?>" alt="" data-caption="<?= $row->title; ?>" data-year=" <?= $row->deskripsi; ?>">
						</li>
					<?php endforeach; ?>
					<!-- tambahkan gambar lain dengan tahun yang berbeda -->
				  </ul>
				</div>
			</div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	<div class="overlay">
		<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
			<defs>
				<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
			</defs>

			<g class="parallax">
				<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(5,111,146, 0.6)" />
				<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(5,111,146,0.4)" />
				<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(5,111,146, 0.2)" />
				<use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(5,111,146,1)" />
			</g>
		</svg>
	</div>

	<footer class="ftco-footer ftco-section" style="padding-bottom: 5px; padding-top: 40px;">

		<div class="container">
			<div class="row mb-5">
				<div class="col-md">

					<div>
						<img src="<?php echo base_url('public/FrontEnd'); ?>/images/logo.png" alt="Logo PRIMKOPPOL TRI SAKTI" width="45" style="float: left; margin-right: 10px;">
					</div>


					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">PRIMKOPPOL TRI SAKTI <br>POLRES WONOSOBO</h2>
						<a href="#"><span class="text">Jl. Jolontoro No. 6, Kelurahan Wonosobo Barat, Kecamatan
								Wonosobo, Kabupaten Wonosobo, Propinsi Jawa Tengah.<br></span></a>
						<br>
						<a href=""><span class="icon-phone"></span><span class="text"> Telepon:
								<?= $kontak->telpon; ?></span></a> <br>
						<a href="#"><span class="ion-md-mail"></span><span class="text"> Email:
								<?= $kontak->email; ?></span></a></a>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Lokasi Kantor</h2>
						<div id="maps" style="height: 200px; border-radius: 20px; position: relative;"></div>
						<div class="map-overlay">
							<button id="streetViewButton" class="custom-button">Lihat di Google Street View</button>
							<button class="custom-button"><a id="directionsLink" href="#" target="_blank" class="custom-link">Menuju lokasi</a></button>
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
					<a>PRIMKOPPOL TRI SAKTI POLRES WONOSOBO </a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>

	<div class="scroll-to-top-container">
		<a href="https://wa.me/<?= $kontak->wa; ?>" class="contact-button" target="_blank">
			<i class="fab fa-whatsapp"></i>
			Kontak Kami
		</a>
		<button id="scroll-to-top" title="Kembali ke Atas">
			<i class="image" style="background-image: url('<?php echo base_url('public/FrontEnd'); ?>/images/logo.png');"></i>
		</button>

	</div>


	<!--tambahan script to top-->
	<script>
		window.onscroll = function() {
			scrollFunction();
		};

		function scrollFunction() {
			var scrollToTopButton = document.getElementById("scroll-to-top");

			if (
				document.body.scrollTop > 20 ||
				document.documentElement.scrollTop > 20
			) {
				scrollToTopButton.style.opacity = "1";
				scrollToTopButton.style.transform = "scale(1)";
			} else {
				scrollToTopButton.style.opacity = "0";
				scrollToTopButton.style.transform = "scale(0)";
			}
		}

		document.getElementById("scroll-to-top").addEventListener("click", function() {
			scrollToTop();
		});

		function scrollToTop() {
			var currentPosition =
				document.documentElement.scrollTop || document.body.scrollTop;
			if (currentPosition > 0) {
				window.requestAnimationFrame(scrollToTop);
				window.scrollTo(0, currentPosition - currentPosition / 8);
			}
		}
	</script>

	<!--tambahan swiper-->

	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper('.swiper-container', {
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			speed: 800,
			loop: true,
			autoplay: {
				delay: 5000
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev'
			},
			on: {
				init: function() {
					this.slides[this.activeIndex].querySelector('img').style.transform = 'scale(1)';
				},
				slideChangeTransitionStart: function() {
					var prevIndex = this.previousIndex;
					if (prevIndex >= 0) {
						this.slides[prevIndex].querySelector('img').style.transform = 'scale(1.5)';
					}
				},
				slideChangeTransitionEnd: function() {
					this.slides[this.activeIndex].querySelector('img').style.transform = 'scale(1)';
				}
			}
		});
	</script>

	<!--tambahan teks bergerak-->
	<script>
		var typed = new Typed('#typed-text', {
			strings: ['PRIMKOPPOL TRI SAKTI POLRES WONOSOBO'],
			typeSpeed: 100,
			backSpeed: 0,
			loop: true
		});
	</script>

	<!--tambahan js visi misi-->
	<script>
		const blocks = document.querySelectorAll('.block-6');

		blocks.forEach((block) => {
			block.addEventListener('click', () => {
				blocks.forEach((b) => {
					b.classList.remove('active');
				});
				block.classList.add('active');
			});
		});

		// Ambil semua elemen .block-6
		const block6Elements = document.querySelectorAll('.block-6');

		// Tambahkan event listener pada dokumen
		document.addEventListener('click', (event) => {
			// Periksa apakah elemen yang diklik bukanlah .block-6 atau anak-anaknya
			const isClickedOutsideBlock6 = !event.target.closest('.block-6');

			if (isClickedOutsideBlock6) {
				// Hapus class 'active' dari semua elemen .block-6
				block6Elements.forEach((block6) => {
					block6.classList.remove('active');
				});
			}
		});
	</script>

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
		streetViewButton.addEventListener("click", function() {
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

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
		<div class="logo-loader"></div>
	</div>

	<script>
		window.addEventListener('load', function() {
			setTimeout(function() {
				var loader = document.getElementById('ftco-loader');
				var logo = document.querySelector('.logo-loader');

				loader.style.display = 'none';
				logo.style.display = 'block';
			}, 3000); // Ubah angka 3000 dengan jumlah milidetik (ms) penundaan yang diinginkan
		});
	</script>

	<!--foto galeri-->

	<script>
	
	 document.addEventListener("DOMContentLoaded", function () {
        const mainImage = document.getElementById('main-image');
        const caption = document.getElementById('caption');
        const year = document.getElementById('year');
        const thumbnails = document.querySelectorAll('#thumbnail-slider img');
        const arrowPrev = document.querySelector('.arrow-prev');
        const arrowNext = document.querySelector('.arrow-next');
        const thumbnailSlider = document.querySelector('.carousel__thumbnails ul');
        const thumbnailItems = document.querySelectorAll('.carousel__thumbnails li');
        const thumbnailWidth = thumbnailItems[0].offsetWidth;
        const totalThumbnails = thumbnailItems.length;
        let currentIndex = 0;
        let thumbnailIndex = 0;

		// Inisialisasi galeri dengan gambar pertama
		mainImage.src = thumbnails[currentIndex].src;
		updateCaption(thumbnails[currentIndex].getAttribute('data-caption'));
		updateYear(thumbnails[currentIndex].getAttribute('data-year'));
		setCurrentThumbnail(currentIndex);
		

		// Tambahkan event listener untuk setiap thumbnail
		thumbnails.forEach((thumbnail, i) => {
			thumbnail.addEventListener('click', function() {
				mainImage.src = this.src;
				updateCaption(this.getAttribute('data-caption'));
				updateYear(this.getAttribute('data-year'));
				currentIndex = i;
				mainImage.classList.remove('fade-in');

				setCurrentThumbnail(currentIndex);
			});
		});

		// Tambahkan event listener untuk tombol prev
		arrowPrev.addEventListener('click', function() {
			if (currentIndex > 0) {
				currentIndex--;
			} else {
				currentIndex = thumbnails.length - 1;
			}
			mainImage.classList.add('fade-out');
			setTimeout(function() {
				mainImage.src = thumbnails[currentIndex].src;
				updateCaption(thumbnails[currentIndex].getAttribute('data-caption'));
				updateYear(thumbnails[currentIndex].getAttribute('data-year'));
				mainImage.classList.remove('fade-out');
				setCurrentThumbnail(currentIndex);
				updateThumbnailSlider();
			}, 300);
		});

		// Tambahkan event listener untuk tombol next
		arrowNext.addEventListener('click', function() {
			if (currentIndex < thumbnails.length - 1) {
				currentIndex++;
			} else {
				currentIndex = 0;
			}
			mainImage.classList.add('fade-out');
			setTimeout(function() {
				mainImage.src = thumbnails[currentIndex].src;
				updateCaption(thumbnails[currentIndex].getAttribute('data-caption'));
				updateYear(thumbnails[currentIndex].getAttribute('data-year'));
				mainImage.classList.remove('fade-out');
				setCurrentThumbnail(currentIndex);
				updateThumbnailSlider();
			}, 300);
		});


		// Tambahkan event listener untuk tombol prev thumbnail
		arrowPrev.addEventListener('click', function() {
			if (thumbnailIndex > 0) {
				thumbnailIndex--;
			} else {
				thumbnailIndex = totalThumbnails - 1;
			}
			updateThumbnailSlider();
		});

		// Tambahkan event listener untuk tombol next thumbnail
		arrowNext.addEventListener('click', function() {
			if (thumbnailIndex < totalThumbnails - 1) {
				thumbnailIndex++;
			} else {
				thumbnailIndex = 0;
			}
			updateThumbnailSlider();
		});

		// Fungsi untuk mengupdate caption
		function updateCaption(captionText) {
			caption.textContent = captionText;
		}

		// Fungsi untuk mengupdate tahun
		function updateYear(yearText) {
			year.textContent = yearText;
		}

		// Fungsi untuk mengatur thumbnail aktif
		function setCurrentThumbnail(index) {
			thumbnails.forEach((thumbnail, i) => {
				if (i === index) {
					thumbnail.classList.add('active');
				} else {
					thumbnail.classList.remove('active');
				}
			});
		}

		// Fungsi untuk memperbarui posisi slide thumbnail
		function updateThumbnailSlider() {
			const slidePosition = -thumbnailIndex * thumbnailWidth;
			thumbnailSlider.style.transform = `translateX(${slidePosition}px)`;
		}
		
 // Initialize Magnific Popup
        $('.image-popup').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });

		
	</script>
	
	
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
	<script src="<?php echo base_url('/public/FrontEnd'); ?>/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="<?php echo base_url('/public/FrontEnd'); ?>/js/google-map.js"></script>
	<script src="<?php echo base_url('/public/FrontEnd'); ?>/js/main.js"></script>
</body>

</html>