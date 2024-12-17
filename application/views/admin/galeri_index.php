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
<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary btn-fw mb-3" data-toggle="modal" data-target="#fileInputModal">
	add galeri
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="fileInputModal" tabindex="-1" role="dialog" aria-labelledby="fileInputModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="<?= base_url('admin/galeri/simpan') ?>" method="post" enctype='multipart/form-data'>
				<div class="modal-header">
					<h5 class="modal-title" id="fileInputModalLabel">File Input</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-6">
							<label style="display: block; margin-bottom: 0.5rem;">Judul</label>
							<input type="text"
								style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; border: 1px solid #ced4da; border-radius: 0.25rem;"
								placeholder="judul foto" name="judul" required />
						</div>
					</div>
					<label for="formFile" style="display: block; margin-top: 1rem; margin-bottom: 0.5rem;">Pilih foto
						dengan ukuran (16:9)</label>
					<div class="mb-3">
						<input
							style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; border: 1px solid #ced4da; border-radius: 0.25rem;"
							type="file" name="foto">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn-fw mb-3">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<br>
<div class="gallery-container">
        <div class="gallery-grid">
		<?php $no = 1; foreach ($galeri as $tampil) { ?>
            <div class="gallery-item">
<a href="" data-toggle="modal" data-target="#imageModal<?= $tampil['id_galeri'] ?>">
<img src="<?= base_url('assets/upload/galeri/' . $tampil['foto']) ?>" alt="Group making hand gestures">
</a>
<a href="<?= site_url('admin/galeri/delete/' . $tampil['foto']) ?>"
					class="btn btn-sm delete-button"
					onClick="return confirm('Are you sure you deleted this data ?')">
					<i class="fa fa-trash"></i>
				</a>
				<!-- edit galeri -->
				<button type="button" class="btn btn-sm edit-button" data-toggle="modal"
					data-target="#editgaleriModal<?= $tampil['id_galeri'] ?>"><i class="fa fa-edit"></i></button>

				<?php $no=0; foreach($galeri as $item){ $no++ ?>
				<div class="modal fade" id="editgaleriModal<?= $tampil['id_galeri'] ?>" tabindex="-1" role="dialog"
					aria-labelledby="editgaleriModalLabel<?= $tampil['id_galeri'] ?>" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="editgaleriModalLabel<?= $tampil['id_galeri'] ?>">Edit galeri</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form action="<?= base_url('admin/galeri/update')?>" method="post"
								enctype='multipart/form-data'>
								<input type="hidden" name="id_galeri" value="<?= $tampil['id_galeri'] ?>">
								<input type="hidden" name="nama_foto" value="<?= $item['foto'] ?>">
								<div class="modal-body">
									<div class="form-group">
										<label for="judul">Title</label>
										<input type="text" class="form-control" value="<?= $item['judul'] ?>"
											name="judul" />
									</div>
									<div class="form-group">
										<label for="foto">Photo</label>
										<input type="file" name="foto" class="form-control"
											accept="image/png, image/jpeg">
									</div>
									<!-- <div class="form-group">
										<img src="<?= base_url('assets/upload/galeri/'.$item['foto']) ?>"
											alt="<?= $item['judul'] ?>" class="img-fluid mt-3">
									</div> -->
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<?php } ?>

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
