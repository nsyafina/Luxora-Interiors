<div class="col-md-12 mt-3">
    <!-- general form elements disabled -->
    <div class="card card-outline card-olive">
        <div class="card-header">
            <h3 class="card-title">Form Edit Barang</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            //notifikasi form kosong
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h6><i class="icon fas fa-exclamation-triangle"></i>', '</h6></div>');
            //notifikasi gagal upload gambar
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h6><i class="icon fas fa-times"></i>' . $error_upload . '</h6></div>';
            }
            echo form_open_multipart('barang/edit/' . $barang->id_barang) ?>

            <div class="form-group">
                <label>Nama Barang</label>
                <input name="nama_barang" class="form-control" placeholder="Nama Barang ..." value="<?= $barang->nama_barang ?>">
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="id_kategori" class="form-control">
                            <option value="<?= $barang->id_kategori ?>"><?= $barang->nama_kategori ?></option>
                            <?php foreach ($kategori as $key => $value) { ?>
                                <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Harga</label>
                        <input name="harga" class="form-control" placeholder="Harga Barang ..." value="<?= $barang->harga ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Berat (Kg)</label>
                        <input type="number" name="berat" min="0" class="form-control" placeholder="Berat Dalam Satuan Kilogram ..." value="<?= $barang->berat ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Material</label>
                        <input name="material" class="form-control" placeholder="Material Barang ..." value="<?= $barang->material ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Warna</label>
                        <input name="warna" class="form-control" placeholder="Warna Barang ..." value="<?= $barang->warna ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kapasitas</label>
                        <input name="kapasitas" class="form-control" placeholder="Kapasitas Barang ..." value="<?= $barang->kapasitas ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="preview_gambar">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <img src="<?= base_url('img/kategori/' . $barang->gambar) ?>" id="gambar_load" width="150px">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <button class="btn btn-primary btn-sm">Simpan</button>
                <a href="<?= base_url('barang') ?>" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#preview_gambar").change(function() {
        bacaGambar(this);
    });
</script>