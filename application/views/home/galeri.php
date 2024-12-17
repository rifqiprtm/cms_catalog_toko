<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .gallery-container {
            text-align: center;
            padding: 20px;
        }
        .gallery-title {
            font-size: 2em;
            color: #4CAF50;
            margin-bottom: 20px;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            max-width: 1000px;
            margin: 0 auto;
        }
        .gallery-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<br>
<br>
<br>
<div class="gallery-container">
        <div class="gallery-title"></div>
        <div class="gallery-grid">
		<?php $no = 1; foreach ($galeri as $tampil) { ?>
            <div class="gallery-item">
<a href="" data-toggle="modal" data-target="#imageModal<?= $tampil['id_galeri'] ?>">
<img src="<?= base_url('assets/upload/galeri/' . $tampil['foto']) ?>" alt="Group making hand gestures">
</a>
				<!-- edit galeri -->
		</div>
		<div class="modal fade" id="imageModal<?= $tampil['id_galeri'] ?>" tabindex="-1" role="dialog"
					aria-labelledby="imageModalLabel<?= $tampil['id_galeri'] ?>" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="imageModalLabel<?= $tampil['id_galeri'] ?>">
									<?= $tampil['judul'] ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="<?= base_url('assets/upload/galeri/' . $tampil['foto']) ?>" alt="Foto"
									class="img-fluid">
							</div>
						</div>
					</div>
				</div>
		<?php } ?>
        </div>
    </div>
