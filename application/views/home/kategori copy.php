<br>
<section class="exclusive_item_part blog_item_section">
        <div class="container">
            <div class="">
                <div class="col-xl-5">
                    <div class=""><div>
                    <h2>Produk Yang Dijual</h2>

                    </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- nampilke  -->
                <!-- <?php $no=1; foreach($konten as $tampil){ ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="<?=  base_url('assets/upload/konten/'.$tampil     ['foto'])?>" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3><?= $tampil['judul'] ?></h3>
                            <span><?= $tampil['nama_kategori'] ?></span>
                            <p><?= $tampil['keterangan'] ?></p>
                            <a href="<?= base_url('home/artikel/'.$tampil['slug'])?>" class="btn_3">Read More <img src="<?= base_url('template/dingo-master/')?>img/icon/left_2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <?php } ?> -->
                <?php $no = 1; foreach ($konten as $tampil): ?>
            <a href="<?= base_url('home/artikel/'.$tampil['slug'])?>" class="kontenn">
                <div class="">
                <img src="<?= base_url('assets/upload/konten/'.$tampil['foto']) ?>" alt="Foto" 
     style="width: auto; height: 200px; margin: 10px;">

                    <div class="title">
                        <?php
                            $judul = $tampil['judul'];
                            $judulPendek = strlen($judul) > 25 ? substr($judul, 0, 25) . '...' : $judul;
                        ?>
                    </div>
                    <h6 class="warna"><?= $judulPendek ?></h6>
                    <h6 class="harga"><?= $tampil['harga'] ?></h6>
                    <div class="toko-container" style="margin-left: 20px;">
                        <img class="mx-0" src="https://www.klikindomaret.com/Assets/image/send_by_store_blue.png" alt="" id="tokoKlikIndomaret">
                        <span class="warna mx-0"><?= $tampil['nama_toko'] ?></span>
                    </div>
                    <br>
                </div>
            </a>
            <?php endforeach; ?>
            </div>
        </div>
    </section>