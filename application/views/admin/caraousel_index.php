<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary btn-fw mb-3" data-toggle="modal" data-target="#fileInputModal">
	add caraousel
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="fileInputModal" tabindex="-1" role="dialog" aria-labelledby="fileInputModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
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
						dengan ukuran (1:3)</label>
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
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Foto</th>
			<th>Judul</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $no = 1; foreach ($caraousel as $tampil) { ?>
<tr>
    <td><?= $no++ ?></td>
    <td>
        <a href="#" data-toggle="modal" data-target="#imageModal<?= $tampil['id_caraosel'] ?>">
            <img src="<?= base_url('assets/upload/caraousel/' . $tampil['foto']) ?>" alt="Foto"
                 style="width: 50px; height: 50px;">
        </a>
        <button type="button" class="btn btn-sm view-photo-button" data-toggle="modal"
                data-target="#imageModal<?= $tampil['id_caraosel'] ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi bi-search" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
            see photo
        </button>
        <!-- Modal -->
        <div class="modal fade" id="imageModal<?= $tampil['id_caraosel'] ?>" tabindex="-1" role="dialog"
             aria-labelledby="imageModalLabel<?= $tampil['id_caraosel'] ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel<?= $tampil['id_caraosel'] ?>">
                            <?= $tampil['judul'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="<?= base_url('assets/upload/caraousel/' . $tampil['foto']) ?>" alt="Foto"
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </td>
    <td><?= $tampil['judul'] ?></td>
    <td>
        <a href="<?= site_url('admin/caraousel/delete/' . $tampil['foto']) ?>"
           class="btn btn-sm delete-button"
           onClick="return confirm('Are you sure you deleted this data ?')">
            <i class="fa fa-trash"></i>
        </a>
        <!-- edit caraousel -->
        <button type="button" class="btn btn-sm edit-button" data-toggle="modal"
                data-target="#editCarouselModal<?= $tampil['id_caraosel'] ?>"><i class="fa fa-edit"></i></button>

        <div class="modal fade" id="editCarouselModal<?= $tampil['id_caraosel'] ?>" tabindex="-1" role="dialog"
             aria-labelledby="editCarouselModalLabel<?= $tampil['id_caraosel'] ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCarouselModalLabel<?= $tampil['id_caraosel'] ?>">Edit Carousel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/caraousel/update') ?>" method="post"
                          enctype='multipart/form-data'>
                        <input type="hidden" name="id_caraosel" value="<?= $tampil['id_caraosel'] ?>">
                        <input type="hidden" name="nama_foto" value="<?= $tampil['foto'] ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="judul">Title</label>
                                <input type="text" class="form-control" value="<?= $tampil['judul'] ?>"
                                       name="judul" />
                            </div>
                            <div class="form-group">
                                <label for="foto">Photo</label>
                                <input type="file" name="foto" class="form-control"
                                       accept="image/png, image/jpeg">
                            </div>
                            <div class="form-group">
                                <img src="<?= base_url('assets/upload/caraousel/' . $tampil['foto']) ?>"
                                     alt="<?= $tampil['judul'] ?>" class="img-fluid mt-3">
                            </div>
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

			</td>
		</tr>
	</tbody>

</table>
