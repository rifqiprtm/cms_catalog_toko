<style>
/* Existing styles remain unchanged */
.title {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.content {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.title {
    flex-grow: 1;
}

.right-align {
    white-space: nowrap;
}
</style>

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
<style>
/* Existing styles remain unchanged */
.title {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.content {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.title {
    flex-grow: 1;
}

.right-align {
    white-space: nowrap;
}
</style>
<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php $no=1; foreach($caraousel as $tampil){ ?>
        <div class="carousel-item <?php if($no==1) { echo 'active'; }?>">
            <img src="<?= base_url('assets/upload/caraousel/'.$tampil['foto'])?>" class="d-block w-100 carousel-img" alt="...">
        </div>
        <?php $no++; } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Search Form -->
<br>



<br>

<section class="search_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="search_form right-align">
                    <input type="text" id="searchInput" class="form-control small-input" placeholder="Cari produk...">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<?php foreach ($data_konten as $kategori => $konten): ?>
    <?php if (!empty($konten)): // Check if there's content ?>
    <section class="exclusive_item_part blog_item_section category-section">
        <div class="container custom-box">
            <div class="content">
                <h2 class="title"><?= $kategori ?></h2>
                <?php 
                    $no = 1; 
                    $firstCategoryPrinted = false; 
                    foreach ($konten as $tampil): 
                        if ($no > 5) break; 
                ?>
                    <?php if (!$firstCategoryPrinted): ?>
                        <a href="<?= base_url('home/kategori/'.$tampil['id_kategori']) ?>">
                        Lihat semua
                        </a>
                        <?php $firstCategoryPrinted = true; ?>
                    <?php endif; ?>
                <?php 
                    $no++; 
                    endforeach; 
                ?>
            </div>
            <div class="row mx-0 contentContainer">
                <?php $no = 1; foreach ($konten as $tampil): if ($no > 5) break; ?> 
                    <a href="<?= base_url('home/artikel/'.$tampil['slug'])?>" class="kontenn" style="display: inline-block;">
                        <div class="content-item" style="width: 200px; margin: 10px;">
                            <img src="<?= base_url('assets/upload/konten/'.$tampil['foto']) ?>" alt="Foto" style="width: auto; height: 200px;">
                            <div class="title-container">
                                <?php
                                    $judul = $tampil['judul'];
                                    $judulPendek = strlen($judul) > 25 ? substr($judul, 0, 25) . '...' : $judul;
                                ?>
                                <h6 class="title"><?= $judulPendek ?></h6>
                            </div>
                            <h6 class="harga"><?= $tampil['harga'] ?></h6>
                            <div class="toko-container" style="margin-left: 20px;">
                                <img class="mx-0" src="https://www.klikindomaret.com/Assets/image/send_by_store_blue.png" alt="" id="tokoKlikIndomaret">
                                <span class="warna mx-0"><?= $tampil['nama_toko'] ?></span>
                            </div>
                            <br>
                        </div>
                    </a>
                <?php 
                    $no++; 
                    endforeach; 
                ?>
            </div>
        </div>
    </section>
    
    <?php endif; // End of check for content ?>
<?php endforeach; ?>
<section class="regervation_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div>
                    <h2>Kritik & Saran</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="regervation_part_iner">
                    <form action="<?php echo base_url('home/simpan'); ?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputName" name="name" placeholder="Name *" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email address *" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputPhone" name="telepon" placeholder="Phone number *" required>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" id="Textarea" name="comment" rows="4" placeholder="Your Note *" required></textarea>
                            </div>
                        </div>
                        <div class="regerv_btn">
                            <button type="submit" class="btn_4">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
