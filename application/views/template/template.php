<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title_halaman ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('template/')?>assets/img/favicon.png">
    <link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('template/')?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('template/')?>assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('template/')?>assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url('template/')?>assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url('template/')?>assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('template/')?>assets/plugins/morris/morris.css">
    <link rel="stylesheet" href="<?= base_url('template/')?>assets/css/style.css">

	<style> .icon-size { width: 30px; height: 30px; } 
	.center-title { position: absolute; left: 50%; transform: translateX(-50%); font-size: 24px; line-height: 50px; 
margin-top: 10px;
	} </style>
</head>

<body>
    <div class="main-wrapper">
        <div class="header-outer">
            <div class="header">
                <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars" aria-hidden="true"></i></a>
                <a id="toggle_btn" class="float-left" href="javascript:void(0);">
                    <img src="<?= base_url('template/')?>assets/img/sidebar/icon-21.png" alt="">
                </a>

                <ul class="nav float-left">
                    <li>
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                            </a>
                            <form action="">
                                <input class="form-control" type="text" placeholder="Search here" onkeyup="searchTable()">
                                <button class="btn" type="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a  class="mobile-logo d-md-block d-lg-none d-block"><img
                                src="<?= base_url('template/')?>assets/img/logo1.png" alt="" width="30" height="30"></a>
                    </li>
                </ul>
                
                <ul class="nav user-menu float-right">
                    <li class="nav-item dropdown has-arrow">
                        <a  class=" nav-link user-link" data-toggle="dropdown">
                            <span class="user-img"><img class="rounded-circle"
                                    src="<?= base_url('template/')?>assets/img/user-06.jpg" width="30" alt="Admin">
                                <span class="status online"></span></span>
                            <span>
                                <?= $this->session->userdata('nama') ?>
                                ||
                                <?= $this->session->userdata('level') ?>
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <!-- <a class="dropdown-item" >My Profile</a>
                            <a class="dropdown-item" >Edit Profile</a>
                            <a class="dropdown-item" href="inbox.html">Settings</a> -->
                            <a class="dropdown-item" href="<?=base_url('auth/logout')?>">Logout</a>
                        </div>
                    </li>
                </ul>
                <div class="center-title">
					<h2>
                    <?= $title_halaman ?>
					</h2>
                </div>
            </div>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <div class="header-left">
                        <a href="<?= base_url('')?>" class="logo">
                            <img src="<?= base_url('template/')?>assets/img/logo1.png" width="40" height="40" alt="">
                            <span class="text-uppercase">Preschool</span>
                        </a>
                    </div>
                    <ul class="sidebar-ul">
                        <?php $menu = $this->uri->segment(2); ?>
                        <li class="<?php if($menu == 'home'){ echo 'active';} ?>">
                            <a href="<?= base_url('admin/home') ?>"><img src="<?= base_url('template/')?>assets/img/sidebar/icon-1.png" alt="icon" class="icon-size"><span>Dashboard</span></a>
                        </li>
                        <?php if($this->session->userdata('level') == "Konstributor") { ?>
                        <li class="<?php if($menu == 'konten'){ echo 'active';} ?>">
                            <a href="<?= base_url('admin/konten') ?>"><img src="<?= base_url('template/')?>assets/img/sidebar/icon-12.png" alt="icon" class="icon-size"><span>Content</span></a>
                        </li>
                        <li class="<?php if($menu == 'kategori'){ echo 'active';} ?>">
                            <a href="<?= base_url('admin/kategori') ?>"><img src="<?= base_url('template/')?>assets/img/sidebar/icon-7.png" alt="icon" class="icon-size"><span>Category</span></a>
                        </li>
                        <li class="<?php if($menu == 'toko'){ echo 'active';} ?>">
                            <a href="<?= base_url('admin/toko') ?>"><img src="<?= base_url('assets/ikon/toko.png')?>" alt="icon" class="icon-size"><span>Shop</span></a>
                        </li>
                        <li class="<?php if($menu == 'caraousel'){ echo 'active';} ?>">
                            <a href="<?= base_url('admin/caraousel') ?>">
                                <img src="<?= base_url('template/') ?>assets/img/sidebar/crown.png" alt="icon" class="icon-size">
                                <span>Caraousel</span>
                            </a>
                        </li>
                        <li class="<?php if($menu == 'galeri'){ echo 'active';} ?>">
                            <a href="<?= base_url('admin/galeri') ?>">
                                <img src="<?= base_url('template/') ?>assets/img/sidebar/galeri.png" alt="icon" class="icon-size">
                                <span>Galeri</span>
                            </a>
                        </li>
                        <li class="<?php if($menu == 'saran'){ echo 'active';} ?>">
                            <a href="<?= base_url('admin/saran') ?>">
                                <img src="<?= base_url('template/') ?>assets/img/sidebar/saran.png" alt="icon" class="icon-size">
                                <span>Saran</span>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if($this->session->userdata('level') == "admin") { ?>
                        <li class="<?php if($menu == 'user'){ echo 'active';} ?>">
                            <a href="<?= base_url('admin/user') ?>"><img src="<?= base_url('template/')?>assets/img/sidebar/icon-10.png" alt="icon" class="icon-size"><span>User</span></a>
                        </li>
                        <li class="<?php if($menu == 'konfigurasi'){ echo 'active';} ?>">
                            <a href="<?= base_url('admin/konfigurasi') ?>">
                                <img src="<?= base_url('template/') ?>assets/img/sidebar/gear-removebg-preview.png" alt="icon" class="icon-size">
                                <span>Configuration</span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="page-wrapper">
            <div class="content container-fluid">
                <?= $contents ?>
            </div>
        </div>
		<script src="<?= base_url('template/')?>assets/js/jquery-3.6.0.min.js"></script>

		<script src="<?= base_url('template/')?>assets/js/bootstrap.bundle.min.js"></script>

		<script src="<?= base_url('template/')?>assets/js/jquery.slimscroll.js"></script>

		<script src="<?= base_url('template/')?>assets/js/select2.min.js"></script>
		<script src="<?= base_url('template/')?>assets/js/moment.min.js"></script>

		<script src="<?= base_url('template/')?>assets/js/fullcalendar.min.js"></script>
		<script src="<?= base_url('template/')?>assets/js/jquery.fullcalendar.js"></script>

		<script src="<?= base_url('template/')?>assets/plugins/morris/morris.min.js"></script>
		<script src="<?= base_url('template/')?>assets/plugins/raphael/raphael-min.js"></script>
		<script src="<?= base_url('template/')?>assets/js/apexcharts.js"></script>
		<script src="<?= base_url('template/')?>assets/js/chart-data.js"></script>

		<script src="<?= base_url('template/')?>assets/js/app.js"></script>
		<script>
			$('#menghilang').delay('slow').slideDown('slow').delay(5000).slideUp(600);

		</script>
		<script>
			function searchTable() {
				let input = document.querySelector('input');
				let filter = input.value.toLowerCase();
				let tables = document.querySelectorAll('table');
				tables.forEach(function (table) {
					let rows = table.querySelectorAll('tbody tr');
					rows.forEach(function (row) {
						let id1 = row.cells[0].textContent.toLowerCase();
						let id2 = row.cells[1].textContent.toLowerCase();
						if (id1.includes(filter) || id2.includes(filter)) {
							row.style.display = '';
						} else {
							row.style.display = 'none';
						}
					});
				});
			}

		</script>
</body>

</html>
