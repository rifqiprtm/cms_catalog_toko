<div id="menghilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Konfigurasi</h5>
        </div>
        <div class="modal-body">
			<label for="judul" class="form-">Judul Website</label>
            <div class="form-group">
                <input type="text" id="judul" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>" />
            </div>
			<label for="profil_website" class="form-">Profile</label>
            <div class="form-group">
                <textarea id="profil_website" name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
            </div>
			<label for="instagram" class="form-">Link Instagram</label>
            <div class="form-group">
                <input type="text" id="instagram" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>" />
            </div>
			<label for="tiktok" class="form-">LInk Tiktok</label>
            <div class="form-group">
                <input type="text" id="tiktok" class="form-control" name="tiktok" value="<?= $konfig->tiktok; ?>" />
            </div>
            <label for="facebook" class="form-">Link Facebook</label>
            <div class="form-group">
                <input type="text" id="facebook" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>" />
            </div>
            <label for="x" class="form-">Link X</label>
            <div class="form-group">
                <input type="text" id="x" class="form-control" name="x" value="<?= $konfig->x; ?>" />
            </div>
            <label for="youtube" class="form-">Link Youtube</label>
            <div class="form-group">
                <input type="text" id="youtube" class="form-control" name="youtube" value="<?= $konfig->youtube; ?>" />
            </div>
            <label for="telegram" class="form-">Link Telegram</label>
            <div class="form-group">
                <input type="text" id="telegram" class="form-control" name="telegram" value="<?= $konfig->telegram; ?>" />
            </div>
			<label for="email" class="form-">Email</label>
            <div class="form-group">
                <input type="email" id="email" class="form-control" name="email" value="<?= $konfig->email; ?>" />
            </div>
			<label for="alamat" class="form-">Alamat</label>
            <div class="form-group">
                <input type="text" id="alamat" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>" />
            </div>
			<label for="no_wa" class="form-">Whatsapp</label>
            <div class="form-group">
                <input type="text" id="no_wa" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" />
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
