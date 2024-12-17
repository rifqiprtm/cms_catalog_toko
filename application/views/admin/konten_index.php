
<!-- alert -->
<div id="menghilang">
	<?php echo $this->session->flashdata('alert', true) ?>
</div>
<div>
<button type="button" class="btn btn-primary btn-fw mb-3" data-toggle="modal" data-target="#myModal">
    Add Content
</button>
<div class="container">
    <!-- Filter Form -->
    <form method="GET" action="">
        <div class="form-group">
            <label for="filterCategory">Filter by Content Category:</label>
            <select id="filterCategory" name="filterCategory" class="form-control" onchange="this.form.submit()">
                <option value="">All Categories</option>
                <?php foreach($kategori as $kategoriOption) { ?>
                <option value="<?= $kategoriOption['id_kategori'] ?>"
                    <?= (isset($_GET['filterCategory']) && $_GET['filterCategory'] == $kategoriOption['id_kategori']) ? 'selected' : '' ?>>
                    <?= $kategoriOption['nama_kategori'] ?>
                </option>
                <?php } ?>
            </select>
        </div>
    </form>
</div>

<!-- Modal save -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/konten/save')?>" method="post" enctype='multipart/form-data'>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputTitle1">Title</label>
                        <input type="text" class="form-control" id="exampleInputTitle1" placeholder="Insert Name" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle1">Barcode</label>
                        <input type="text" class="form-control" id="exampleInputTitle1" placeholder="Insert Barcode" name="barcode">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrice1">Price</label>
                        <input type="text" class="form-control" id="exampleInputPrice1" placeholder="Insert price" name="harga" required>
                        <input type="hidden" id="hiddenHarga" name="hiddenHarga">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCategory1">Category</label>
                        <select name="id_kategori" class="form-control">
                            <?php foreach($kategori as $tampil){ ?>
                            <option value="<?= $tampil['id_kategori'] ?>"><?= $tampil['nama_kategori'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputToko1">Toko</label>
                        <select name="id_toko" class="form-control">
                            <?php foreach($toko as $tampil){?>
                            <option value="<?= $tampil['id_toko'] ?>"><?= $tampil['nama_toko'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Description</label>
                        <textarea name="keterangan" class="form-control" rows="1" cols="40"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhoto1">Photo</label>
                        <input type="file" name="foto" class="form-control" accept="image/png, image/gif, image/jpg, image/jpeg">
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

<!-- Edit Content Modals -->
<?php $no=0; foreach($konten as $tampil){ $no++ ?>
<div class="modal fade" id="editModal<?= $no; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $no; ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel<?= $no; ?>">Edit Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/konten/update')?>" method="post" enctype='multipart/form-data'>
                <input type="hidden" name="nama_foto" value="<?= $tampil['foto'] ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="editInputTitle<?= $no; ?>">Title</label>
                        <input type="text" class="form-control" id="editInputTitle<?= $no; ?>" value="<?= $tampil['judul'] ?>" name="judul" />
                    </div>
                    <div class="form-group">
                        <label for="editInputPrice<?= $no; ?>">Price</label>
                        <input type="text" class="form-control" id="editInputPrice<?= $no; ?>" value="<?= $tampil['harga'] ?>" name="harga" />
                        <input type="hidden" id="hiddenHargaEdit<?= $no; ?>" name="hiddenHarga">
                    </div>
                    <div class="form-group">
                        <label for="editInputBarcode<?= $no; ?>">Barcode</label>
                        <input type="text" class="form-control" id="editInputBarcode<?= $no; ?>" value="<?= $tampil['barcode'] ?>" name="barcode" />
                    </div>
                    <div class="form-group">
                        <label for="editInputCategory<?= $no; ?>">Category</label>
                        <select name="id_kategori" class="form-control">
                            <?php foreach($kategori as $uu) { ?>
                            <option <?php if($uu['id_kategori']==$tampil['id_kategori']){ echo"selected";}?> value="<?= $uu['id_kategori'] ?>"><?= $uu['nama_kategori'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                                        <div class="form-group">
                        <label for="editInputShop<?= $no; ?>">Shop</label>
                        <select name="id_toko" class="form-control">
                            <?php foreach($toko as $uu) { ?>
                            <option <?php if($uu['id_toko']==$tampil['id_toko']){ echo"selected";}?> value="<?= $uu['id_toko'] ?>"><?= $uu['nama_toko'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editInputDescription<?= $no; ?>">Description</label>
                        <textarea name="keterangan" class="form-control"><?= $tampil['keterangan'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editInputPhoto<?= $no; ?>">Photo</label>
                        <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
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

<!-- JavaScript to Format Price -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const priceInputs = document.querySelectorAll('input[name="harga"]');
    priceInputs.forEach(function(input) {
        input.addEventListener('keyup', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            e.target.value = formatRupiah(value, 'Rp ');
            const hiddenInput = e.target.nextElementSibling;
            hiddenInput.value = value;
        });
    });
});

function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? prefix + rupiah : '');
}
</script>


<!-- Main Content -->
<!-- Main Content -->
<div>
    <!-- Content Table -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Price</th>
                <th>Category</th>
                <th>Shop</th>
                <th>Photo & Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            <?php foreach($konten as $tampil) { ?>
            <?php if (!isset($_GET['filterCategory']) || $_GET['filterCategory'] == "" || $_GET['filterCategory'] == $tampil['id_kategori']) { ?>
            <?php $no++; ?>
            <tr>
                <td><?= $no; ?></td>
                </td>
                <td><?= $tampil['judul'] ?></td>
                <td><?= $tampil['harga'] ?></td>
                <td><?= $tampil['nama_kategori'] ?></td>
                <td><?= $tampil['nama_toko'] ?></td>
                <td>
                    <button type="button" class="btn btn-sm view-content-button" data-toggle="modal" data-target="#viewContentModal<?= $tampil['id_konten'] ?>">
                        <i class="fa fa-eye"></i> see photo & content
                    </button>
                    <!-- Modal view content -->
                    <div class="modal fade" id="viewContentModal<?= $tampil['id_konten'] ?>" tabindex="-1" role="dialog" aria-labelledby="viewContentModalLabel<?= $tampil['id_konten'] ?>" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewContentModalLabel<?= $tampil['id_konten'] ?>">Content Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Title:</strong> <?= $tampil['judul'] ?></p>
                                    <p><strong>Price:</strong> <?= $tampil['harga'] ?></p>
                                    <p><strong>Barcode:</strong> <?= $tampil['barcode'] ?></p>
                                    <p><strong>Creator:</strong> <?= $tampil['creator_name'] ?></p>
                                    <p><strong>Date:</strong> <?= $tampil['tanggal'] ?></p>
                                    <p><strong>Category:</strong> <?= $tampil['nama_kategori'] ?></p>
                                    <p><strong>Description:</strong> <?= nl2br ($tampil['keterangan']) ?></p>
                                    <img src="<?= base_url('assets/upload/konten/'.$tampil['foto']) ?>" class="img-fluid" alt="Foto">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="<?= site_url('admin/konten/delete/'.$tampil['foto']) ?>" class="btn btn-sm delete-button" onClick="return confirm('Are you sure you deleted this content ?')">
                        <i class="fa fa-trash"></i>
                    </a>
                    <button type="button" class="btn btn-sm edit-button" data-toggle="modal" data-target="#editModal<?= $no; ?>"><i class="fa fa-edit"></i></button>
                </td>
            </tr>
            <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- JavaScript to Format Price -->


<!-- JavaScript to Format Price -->


</div>

</div>
