<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Sistem Informasi Bimbingan Proyek - Landing Page</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="#" rel="icon">
	<link href="<?= base_url('assets/assets') ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/assets') ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url('assets/assets') ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/assets') ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/assets') ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets/assets') ?>/css/style.css" rel="stylesheet">



	<!-- =======================================================
  * Template Name: Butterfly - v4.7.0
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
	<style>
		.button {
			height: 50px;
			width: 130px;
			position: relative;
			background-color: transparent;
			cursor: pointer;
			border: 2px solid #252525;
			overflow: hidden;
			border-radius: 30px;
			color: #333;
			transition: all 0.5s ease-in-out;
			margin-left: 10px;
		}

		.btn-txt {
			z-index: 1;
			font-weight: 800;
			letter-spacing: 4px;
		}

		.type1::after {
			content: "";
			position: absolute;
			left: 0;
			top: 0;
			transition: all 0.5s ease-in-out;
			background-color: #333;
			border-radius: 30px;
			visibility: hidden;
			height: 10px;
			width: 10px;
			z-index: -1;
		}

		.button:hover {
			box-shadow: 1px 1px 200px #252525;
			color: #fff;
			border: none;
		}

		.type1:hover::after {
			visibility: visible;
			transform: scale(100) translateX(2px);
		}
	</style>

	<!-- ======= Header ======= -->
	<style>
		@font-face {
			font-family: 'ontara';
			src: url('assets/font/Lontara.ttf') format('truetype');
			font-weight: normal;
			font-style: normal;
		}

		.logo {
			font-family: 'ontara', Arial, sans-serif;
			/* Font fallback */
			font-size: 24px;
			/* Mengubah ukuran font */
			font-weight: bold;
			/* Mengubah ketebalan font */
			color: #0080ff;
			/* Mengubah warna font */
			text-transform: uppercase;
			/* Mengubah semua huruf menjadi kapital */
			text-decoration: none;
			/* Menghapus garis bawah dari tautan */
		}
	</style>
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center justify-content-between">

			<a href="<?= base_url(); ?>" class="logo">SIMPRO</a>
			<!-- Uncomment below if you prefer to use text as a logo -->
			<!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto" href="#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="#jadwal">Alur</a></li>
					<li><a class="nav-link scrollto" href="#about">About</a></li>
					<li><a class="nav-link scrollto" href="#team">Team</a></li>
					<li>
						<button class="button type1" onclick="window.location.href='<?= base_url('auth/index'); ?>'">
							<span class="btn-txt">Login</span>
						</button>
					</li>


				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		<style>
			.cssbuttons-io-button {
				background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
				color: white;
				font-family: inherit;
				padding: 0.35em 1.2em;
				font-size: 15px;
				border-radius: 10em;
				border: none;
				letter-spacing: 0.05em;
				display: flex;
				align-items: center;
				overflow: hidden;
				position: relative;
				height: 2.5em;
				cursor: pointer;
				text-transform: uppercase;
				font-weight: 500;
				box-shadow: 0 0 1.6em rgba(183, 33, 255, 0.3), 0 0 1.6em hsla(191, 98%, 56%, 0.3);
				transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
				max-width: 300px;
				width: 200px;
				margin-top: 20px;
				/* Sesuaikan lebar maksimum tombol */
			}

			.cssbuttons-io-button .icon {
				background: white;
				margin-left: 0.8em;
				position: absolute;
				display: flex;
				align-items: center;
				justify-content: center;
				height: 1.8em;
				width: 1.8em;
				border-radius: 10em;
				right: 0.3em;
				transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
			}

			.cssbuttons-io-button:hover .icon {
				width: calc(100% - 0.6em);
			}

			.cssbuttons-io-button .icon svg {
				width: 1em;
				transition: transform 0.3s;
				color: #B721FF;
			}

			.cssbuttons-io-button:hover .icon svg {
				transform: translateX(0.1em);
			}

			.cssbuttons-io-button:active .icon {
				transform: scale(0.9);
			}
		</style>

		<div class="container" style="margin-top: 80px;">
			<div class="row">
				<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
					<h1>Aplikasi Sistem Informasi Tugas Akhir</h1>
					<h2>Sistem informasi Tugas Akhir ini merupakan aplikasi yang digunakan mahasiswa Pascasarjana Fakultas Ilmu Budaya
						khususnya pada program studi Magister. </h2>

					<div>
						<button class="cssbuttons-io-button" onclick="window.location.href='<?= base_url('auth/registration'); ?>'">
							Get started
							<div class="icon">
								<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 0h24v24H0z" fill="none"></path>
									<path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
								</svg>
							</div>
						</button>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img">
					<img src="<?= base_url('assets/assets') ?>/img/hero-img.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= Services Section ======= -->
		<section id="jadwal" class="services section-bg" style="padding-top: 100px;">
			<div class="container">

				<div class="section-title">
					<h2>Alur Aplikasi</h2>

				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-chat" style="color: #ff689b;"></i></div>
							<h4 class="title"><a href="">Mahasiswa Membuat akun di menu register</a></h4>

						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-file" style="color: #e9bf06;"></i></div>
							<h4 class="title"><a href="">Mahasiswa Mengajukan Judul Tugas Akhir Sebelum Koordinator Menentukan Dosen Pembimbing</a></h4>

						</div>
					</div>

					<div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-user-voice" style="color: #3fcdc7;"></i></div>
							<h4 class="title"><a href="">Pembagian Informasi Pembimbing</a></h4>

							<br>

							</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-notepad" style="color:#41cf2e;"></i></div>
							<h4 class="title"><a href="">Proses Bimbingan</a></h4>

							<br>

							</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-list-plus" style="color: #d6ff22;"></i></div>
							<h4 class="title"><a href="">Pengisian Presensi Bimbingan</a></h4>

							<br>

							</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
						<div class="icon-box">
							<div class="icon"><i class="bx bxs-book" style="color: #4680ff;"></i></div>
							<h4 class="title"><a href="">Pengumpulan Laporan Proyek</a></h4>

							<br>

							</p>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End Services Section -->

		<!-- ======= Counts Section ======= -->
		<section id="about" class="counts">
			<div class="container">

				<div class="text-center title">
					<h3>About</h3>
					<hr>
				</div>

				<div class="row counters position-relative">

					<div class="col-lg-3 col-6 text-center">
						<span data-purecounter-start="0" data-purecounter-end="<?= $num_mhs; ?>" data-purecounter-duration="1" class="purecounter"></span>
						<p>Mahasiswa yang terdaftar</p>
					</div>

					<div class="col-lg-3 col-6 text-center">
						<span data-purecounter-start="0" data-purecounter-end="<?= $num_dos; ?>" data-purecounter-duration="1" class="purecounter"></span>
						<p>Dosen Pembimbing</p>
					</div>

					<div class="col-lg-3 col-6 text-center">
						<span data-purecounter-start="0" data-purecounter-end="<?= $num_kor; ?>" data-purecounter-duration="1" class="purecounter"></span>
						<p>Koordinator</p>
					</div>



				</div>

			</div>
		</section><!-- End Counts Section -->

		<!-- ======= Team Section ======= -->
		<section id="team" class="team section-bg">
			<div class="container">

				<div class="section-title">
					<h2>Koordinator</h2>

				</div>

				<div class="row" style="justify-content: center;">



					<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
						<div class="member">
							<div class="member-img">
								<img src="<?= base_url('assets/assets') ?>/img/team/hanni.jpeg" class="img-fluid" alt="">
								<div class="social">
									<a href="https://github.com/raihanmalikul"><i class="bi bi-github"></i></a>
									<a href="https://www.facebook.com/raihan.malikul.1"><i class="bi bi-facebook"></i></a>
									<a href="https://www.instagram.com/raihan_malikul01/"><i class="bi bi-instagram"></i></a>
									<a href="https://www.linkedin.com/in/raihan-malikul-mulki-6a9a82195/"><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<center>
									<h4>Phạm Ngọc Hân (Hanni Pham)</h4>
									<span>I71192812</span>
								</center>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Team Section -->

		<!-- ======= Footer ======= -->
		<footer id="footer">

			<div class="footer-top">
				<div class="container">
					<div class="row" style="justify-content: center;">

						<div class="col-lg-3 col-md-6 footer-links">
							<h4>Useful Links</h4>
							<ul>
								<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
								<li><i class="bx bx-chevron-right"></i> <a href="#jadwal">Jadwal</a></li>
								<li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
								<li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
							</ul>
						</div>

						<div class="col-lg-3 col-md-6 footer-links">
							<h4>Our Services</h4>
							<ul>
								<li><i class="bx bx-chevron-right"></i> <a href="https://getbootstrap.com/">Bootstrap</a></li>
								<li><i class="bx bx-chevron-right"></i> <a href="https://codeigniter.com/">Codeigniter</a></li>
								<li><i class="bx bx-chevron-right"></i> <a href="https://fontawesome.com/v5.15/icons?m=free">Font Awesome</a></li>
								<li><i class="bx bx-chevron-right"></i> <a href="https://boxicons.com/?query=">Box Icon</a></li>
							</ul>
						</div>

						<div class="col-lg-3 col-md-6 footer-links">
							<h4>Our Social Networks</h4>
							<div class="social-links mt-3">
								<a href="https://www.instagram.com/d3tipoltekpos/" class="instagram"><i class="bx bxl-instagram"></i></a>
								<a href="https://it.poltekpos.ac.id/" class="linkedin"><i class="bx bx-globe"></i></a>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="container py-4">
				<div class="copyright">
					&copy; SIMPRO, Inc <?= date('Y'); ?>
				</div>
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working =/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->
					Designed by <a href="https://github.com/raihanmalikul/Sistem_Informasi_Bimbingan">SIMPRO</a>
				</div>
			</div>
		</footer><!-- End Footer -->

		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

		<!-- Vendor JS Files -->
		<script src="<?= base_url('assets/assets') ?>/vendor/purecounter/purecounter.js"></script>
		<script src="<?= base_url('assets/assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url('assets/assets') ?>/vendor/glightbox/js/glightbox.min.js"></script>
		<script src="<?= base_url('assets/assets') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="<?= base_url('assets/assets') ?>/vendor/swiper/swiper-bundle.min.js"></script>
		<script src="<?= base_url('assets/assets') ?>/vendor/=-email-form/validate.js"></script>

		<!-- Template Main JS File -->
		<script src="<?= base_url('assets/assets') ?>/js/main.js"></script>

</body>

</html>