
<!-- alert  -->
<div id=menghilang>
	<?php echo $this->session->flashdata('alert',true) ?>
</div>
<button type="button" class="btn btn-primary btn-fw mb-3" data-toggle="modal" data-target="#myModal">
add categories
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Create kategori</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php echo form_open('admin/kategori/save');?>
			<div class="modal-body">
				<div class="card-body">
					<div class="forms-sample">
						<div class="form-group">
							<label for="exampleInputUsername1">Name category </label>
							<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Insert Name"
								name="nama_kategori" require>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
<table class="table table-striped" >
	<thead>
		<tr>
			<th>no</th>
			<th>content category name </th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=0; foreach($kategori as $tampil){ $no++?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $tampil['nama_kategori'] ?></td>
			<td>
				<!-- aksi  edit  -->
				<button type="button" class="btn btn-sm edit-button" data-toggle="modal" data-target="#edit<?= $tampil['id_kategori'] ?>"><i
						class="fa fa-edit"></i></button>
				<div class="modal fade" id="edit<?= $tampil['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="myModalLabel">Update User</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<?php echo form_open('admin/kategori/update');?>
							<input type="hidden" name="id_kategori" value="<?= $tampil['id_kategori'] ?>">
							<div class="modal-body">
								<div class="card-body">
									<div class="forms-sample">
										<div class="form-group">
											<label for="exampleInputUsername1">Name </label>
											<input type="text" class="form-control" id="exampleInputUsername1"
												value="<?= $tampil['nama_kategori'] ?>"
												name="nama_kategori" require>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
				<!-- aksi hapus  -->
				<a class="btn btn-sm delete-button" onclick="return confirm('apakah anda ingin menghapus data ini')"
					href="<?= base_url('admin/kategori/delete/'.$tampil['id_kategori']) ?>">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
