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
<br>
<section class="search_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="search_form right-align">
                    <input type="text" id="searchInput" class="form-control small-input" placeholder="Cari konten...">
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
                        <a href="<?= base_url('home/kategori_toko/'.$tampil['id_kategori'].'/'.$tampil['id_toko']) ?>">
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
