<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $title;?></title>
	<link rel="icon" href="<?= base_url('template/dingo-master/')?>img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('template/dingo-master/')?>css/bootstrap.min.css">
	<!-- animate CSS -->
	<link rel="stylesheet" href="<?= base_url('template/dingo-master/')?>css/animate.css">
	<!-- owl carousel CSS -->
	<link rel="stylesheet" href="<?= base_url('template/dingo-master/')?>css/owl.carousel.min.css">
	<!-- themify CSS -->
	<link rel="stylesheet" href="<?= base_url('template/dingo-master/')?>css/themify-icons.css">
	<!-- flaticon CSS -->
	<link rel="stylesheet" href="<?= base_url('template/dingo-master/')?>css/flaticon.css">
	<!-- font awesome CSS -->
	<link rel="stylesheet" href="<?= base_url('template/dingo-master/')?>css/magnific-popup.css">
	<!-- swiper CSS -->
	<link rel="stylesheet" href="<?= base_url('template/dingo-master/')?>css/slick.css">
	<link rel="stylesheet" href="<?= base_url('template/dingo-master/')?>css/gijgo.min.css">
	<link rel="stylesheet" href="<?= base_url('template/dingo-master/')?>css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url('template/dingo-master/')?>css/all.css">
	<!-- style CSS -->
	<link rel="stylesheet" href="<?= base_url('template/dingo-master/')?>css/style.css">
	<link href="https://fonts.cdnfonts.com/css/arial-rounded-mt-bold.css" rel="stylesheet">

	<style>
		.copyright_social_icon {
			text-align: right;
			margin-right: 20px;
			/* Adjust this value as needed */
		}

		html {
			scroll-behavior: smooth;
			
		}

		body {
			background-color: whitesmoke;
		}

	</style>
	<style>
    .custom-box {
        background-color: white;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .single_blog_item {
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 15px;
        transition: transform 0.2s;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .single_blog_item:hover {
        transform: scale(1.05);
    }

    .single_blog_img img {
        border-radius: 10px;
        object-fit: cover;
        width: 100%;
        height: auto;
    }

    .title {
        color: #313131;
        font-family: 'ArialRoundedMT_Bold', Arial, sans-serif;
        margin-top: 10px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-left: 20px; /* Geser ke kanan */
    }

    .warna {
        color: #0079C2;
        margin-left: 20px; /* Geser ke kanan */
    }
	.judul {
        margin-left: 20px; /* Geser ke kanan */
		font-family: 'Arial Rounded MT Bold', sans-serif;
    }

    .harga {
        color: #F28418;
        font-weight: bold;
        font-size: 18px;
        margin-left: 20px; /* Geser ke kanan */
    }

    .toko-container {
        display: flex;
        align-items: center;
    }

    .toko-container img {
        margin-right: 8px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .col-sm-6.col-lg-2 {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .kontenn:hover {
        transform: scaleX(1.010) scaleY(1.010);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1), 0px -4px 10px rgba(0, 0, 0, 0.1), 4px 0px 10px rgba(0, 0, 0, 0.1), -4px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .kontenn {
        margin-right: 5px;
        border-radius: 5%;
    }

    .kategori {
        margin-left: 20px; /* Geser ke kanan */
    }
</style>
</head>

<body>
	<!--::header part start::-->
	<header class="main_menu home_menu">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="<?= base_url('home')?>">
							<img src="<?= base_url('template/dingo-master/')?>img/logo.png" alt="logo">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse main-menu-item justify-content-end"
							id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url('home')?>">Beranda</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#aboutSection">Tentang</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" id="navbarDropdown"
										role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										kategori
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php foreach($kategori as $kate){ ?>
										<a class="dropdown-item"
											href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
											<?= $kate['nama_kategori'] ?>
										</a>
										<?php } ?>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
										role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Toko
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php foreach($toko as $tampil){ ?>
										<a class="dropdown-item"
											href="<?= base_url('home/toko/'.$tampil['id_toko']) ?>">
											<?= $tampil['nama_toko'] ?>
										</a>
										<?php } ?>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url('home/galeri')?>">Galeri</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
										role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Kontak
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="https:wa.me/<?= $konfig->no_wa; ?>"><span> Phone
												:</span><?= $konfig->no_wa; ?></a>
									</div>
								</li>
							</ul>
						</div>
						<div class="menu_btn">
							<a href="<?= base_url('auth')?>" class="btn_1 d-none d-sm-block">Login</a>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<style>
		header.main_menu {
			position: fixed;
			width: 100%;
			top: 0;
			left: 0;
			z-index: 1000;
		}

		body {
			padding-top: 100px;
			/* Adjust based on the navbar height */
		}

		.font {
			color: #F28418;
			/* Warna oranye */
			font-weight: bold;
			/* Membuat teks tebal */
			font-size: 18px;
			/* Ukuran font, sesuaikan jika diperlukan */
			font-family: Arial, sans-serif;
			/* Font default, sesuaikan jika diperlukan */
		}

		.harga {
			color: #F28418;
			font-weight: bold;
			font-size: 18px;
			/* Sesuaikan ukuran font jika diperlukan */
		}
		.harga_detail {
			color: #F28418;
			font-weight: bold;
			font-size: 18px;
		}
	</style>
	<!-- pencarian -->
	<style>
.search_form {
    display: flex;
    justify-content: flex-end;
}

.small-input {
    width: 200px; /* Adjust the width as needed */
}

.right-align {
    text-align: right;
}
</style>
	<!-- Header part end-->
	<?= $contents?>
	<!-- footer part start-->
	<div class="container">
		<div class="row">
			<div class="col-lg-4">

			</div>
		</div>
	</div>

	<footer class="footer-area" id="aboutSection">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
					<div class="single-footer-widget footer_1">
						<h4>Tentang </h4>
						<p><?= $konfig->profil_website; ?></p>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-md-2 col-lg-3">
					<div class="single-footer-widget footer_2">
						<h4>Kategori</h4>
						<div class="contact_info">
							<ul>
								<?php
        $max_kategori = 5;
        $counter = 0;
        foreach ($kategori as $kate) {
            if ($counter >= $max_kategori) {
                break;
            }
            echo '<li><a href="'.base_url('home/kategori/'.$kate['id_kategori']).'">'.$kate['nama_kategori'].'</a></li>';
            $counter++;
        }
    ?>
							</ul>

						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
					<div class="single-footer-widget footer_2">
						<h4>Contact us</h4>
						<div class="contact_info">
							<p><span> Alamat :<?= $konfig->alamat; ?></span></p>
							<p><span> Telepon :<?= $konfig->no_wa; ?></span></p>
							<p><span> Email : <?= $konfig->email; ?></span></p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-md-4 col-lg-3">

					<div class="single-footer-widget footer_3">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.17981613784852!2d111.07232283800842!3d-7.588358195524682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1ff2f9a48d17%3A0x225bb761501a26e!2sTB%20Sri%20Widodo!5e0!3m2!1sen!2sid!4v1732367031713!5m2!1sen!2sid"
							width="200" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
			<div class="copyright_part_text">
				<div class="row">
					<div class="col-lg-8">
						<p class="footer-text m-0">&copy;
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							.Copyright &copy;<script>
								document.write(new Date().getFullYear());

							</script> All rights reserved</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
					<div class="col-lg-4">
						<div class="copyright_social_icon text-right">
							<a href="<?= $konfig->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
							<a href="<?= $konfig->instagram; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16"
									height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
									<path
										d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
								</svg>
							</a>
							<a href="<?= $konfig->youtube; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16"
									height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
									<path
										d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
								</svg>
							</a>
							<a href="<?= $konfig->tiktok; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16"
									height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
									<path
										d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
								</svg> </a>
							<a href="<?= $konfig->telegram; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16"
									height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
									<path
										d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
								</svg></a>
							<a href="<?= $konfig->x; ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
									fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
									<path
										d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
								</svg></a>
							<a href="https:wa.me/<?= $konfig->no_wa; ?>"> <svg xmlns="http://www.w3.org/2000/svg"
									width="16" height="16" fill="currentColor" class="bi bi-whatsapp"
									viewBox="0 0 16 16">
									<path
										d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
								</svg></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer part end-->

	<!-- jquery plugins here-->
	<!-- jquery -->
	<script src="<?= base_url('template/dingo-master/')?>js/jquery-1.12.1.min.js"></script>
	<!-- popper js -->
	<script src="<?= base_url('template/dingo-master/')?>js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="<?= base_url('template/dingo-master/')?>js/bootstrap.min.js"></script>
	<!-- easing js -->
	<script src="<?= base_url('template/dingo-master/')?>js/jquery.magnific-popup.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url('template/dingo-master/')?>js/swiper.min.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url('template/dingo-master/')?>js/masonry.pkgd.js"></script>
	<!-- particles js -->
	<script src="<?= base_url('template/dingo-master/')?>js/owl.carousel.min.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url('template/dingo-master/')?>js/slick.min.js"></script>
	<script src="<?= base_url('template/dingo-master/')?>js/gijgo.min.js"></script>
	<script src="<?= base_url('template/dingo-master/')?>js/jquery.nice-select.min.js"></script>
	<!-- custom js -->
	<script src="<?= base_url('template/dingo-master/')?>js/custom.js"></script>
	
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            var searchValue = this.value.toLowerCase();
            var contentSections = document.querySelectorAll('.category-section');

            contentSections.forEach(function(section) {
                var items = section.querySelectorAll('.content-item');
                var matchFound = false;

                items.forEach(function(item) {
                    var title = item.querySelector('.title').innerText.toLowerCase();
                    if (title.includes(searchValue)) {
                        item.style.display = 'inline-block';
                        matchFound = true;
                    } else {
                        item.style.display = 'none';
                    }
                });

                if (matchFound) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        });
    </script>
			<script>
			$('#menghilang').delay('slow').slideDown('slow').delay(5000).slideUp(600);
		</script>
</body>

</html>
