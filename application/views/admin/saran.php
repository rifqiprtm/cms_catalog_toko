<!-- alert  -->
<div id="menghilang">
	<?php echo $this->session->flashdata('alert', true) ?>
</div>

<!-- tabel untuk src -->
<table id="search-result" class="table table-striped">
	<thead>
		<tr>
			<!-- id untuk src -->
			<th>ID Saran</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Isi Saran</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($saran as $tampil) { ?>
		<tr>
			<td><?= $tampil['id_saran'] ?></td>
			<td><?= $tampil['nama'] ?></td>
			<td><?= $tampil['email'] ?></td>
			<td><?= $tampil['telepon'] ?></td>
			<td><?= $tampil['isi_saran'] ?></td>
			<td><?= $tampil['tanggal'] ?></td>
			<td>
				<a class="btn btn-sm delete-button" onclick="return confirm('apakah anda ingin menghapus data ini')"
					href="<?= base_url('admin/saran/delete/'.$tampil['id_saran']) ?>">
					<i class="fa fa-trash"></i>
				</a>
				<button class="btn btn-sm reply-button" data-toggle="modal"
					data-target="#replyModal-<?= $tampil['id_saran'] ?>" data-name="<?= $tampil['nama'] ?>"
					data-email="<?= $tampil['email'] ?>">
					<i class="fa fa-reply"></i>
				</button>
			</td>
		</tr>

		<!-- Modal for Reply -->
		<div class="modal fade" id="replyModal-<?= $tampil['id_saran'] ?>" tabindex="-1" role="dialog"
			aria-labelledby="replyModalLabel-<?= $tampil['id_saran'] ?>" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="replyModalLabel-<?= $tampil['id_saran'] ?>">Balas Saran</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url('admin/saran/send_reply') ?>" method="POST">
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Nama:</label>
								<input type="text" class="form-control" id="recipient-name-<?= $tampil['id_saran'] ?>"
									value="<?= $tampil['nama'] ?>" name="name" readonly>
							</div>
							<div class="form-group">
								<label for="recipient-email" class="col-form-label">Email:</label>
								<input type="email" class="form-control" id="recipient-email-<?= $tampil['id_saran'] ?>"
									value="<?= $tampil['email'] ?>" name="email" readonly>
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Balasan:</label>
								<textarea class="form-control" id="message-text-<?= $tampil['id_saran'] ?>"
									name="reply"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Kirim</button>
						</form>

					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</tbody>
</table>

<!-- Scripts -->
<script>
	$('[id^=replyModal]').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget);
		var name = button.data('name');
		var email = button.data('email');
		var modal = $(this);
		modal.find('.modal-title').text('Balas Saran dari ' + name);
		modal.find('.modal-body input[id^=recipient-name]').val(name);
		modal.find('.modal-body input[id^=recipient-email]').val(email);
	});

</script>
