<!-- alert  -->
<div id=menghilang>
	<?php echo $this->session->flashdata('alert',true) ?>
</div>
<button type="button" class="btn btn-primary btn-fw mb-3" data-toggle="modal" data-target="#myModal">Create
	User</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Create User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php echo form_open('admin/user/save');?>
			<div class="modal-body">
				<div class="card-body">
					<div class="forms-sample">
						<div class="form-group">
							<label for="exampleInputUsername1">Name </label>
							<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Insert Name"
								name="nama" require>
						</div>
						<div class="form-group">
							<label for="exampleInputUsername1">Username</label>
							<input type="text" class="form-control" id="exampleInputUsername1"
								placeholder="Insert Username" name="username" require>
						</div>
						<div class="form-group">
							<label for="exampleInputUsername1">Password</label>
							<input type="password" class="form-control" id="exampleInputUsername1"
								placeholder="Insert Password" name="password" require>
						</div>
						<div class="form-group">
							<label for="exampleInputUsername1">Level</label>
							<select name="level" class="form-control">
								<option value="admin">Admin</option>
								<option value="Konstributor">Konstributor</option>
							</select>
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
<!-- <input type="text" id="search-input" placeholder="Cari..."> -->
<!-- tabel untuk src -->
<table id="search-result" class="table table-striped">
	<thead>
		<tr>
			<!-- id untuk src -->
			<th id="1">username</th>
			<th id="2">name</th>
			<th>level</th>
			<th >Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($user as $tampil) {?>
		<tr>
			<td><?= $tampil['username'] ?></td>
			<td><?= $tampil['nama'] ?></td>
			<td><?= $tampil['level']?></td>
			<td>
				<!-- aksi  edit  -->
				<button type="button" class="btn btn-sm edit-button" data-toggle="modal" data-target="#edit<?= $tampil['id_user'] ?>">
					<i class="fa fa-edit"></i>
				</button>
				<div class="modal fade" id="edit<?= $tampil['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="myModalLabel">Update User</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<?php echo form_open('admin/user/update');?>
							<input type="hidden" name="id_user" value="<?= $tampil['id_user'] ?>">
							<div class="modal-body">
								<div class="card-body">
									<div class="forms-sample">
										<div class="form-group">
											<label for="exampleInputUsername1">Name </label>
											<input type="text" class="form-control" id="exampleInputUsername1"
												value="<?= $tampil['nama'] ?>"
												name="nama" require>
										</div>
										<div class="form-group">
											<label for="exampleInputUsername1">Username</label>
											<input type="text" class="form-control" id="exampleInputUsername1"
												value="<?= $tampil['username'] ?>"
												name="username" readonly>
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
					href="<?= base_url('admin/user/delete/'.$tampil['id_user']) ?>">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
