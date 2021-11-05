<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h4><?= $title; ?></h4>
                <form action="/produk/simpan" method="post">
                <div class="row mb-3">
                    <label for="kode" class="col-form-label col-sm-2">Kode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode" name="kode" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-form-label col-sm-2">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-form-label col-sm-2">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="deskripsi" class="col-form-label col-sm-2">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar" class="col-form-label col-sm-2">Gambar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gambar" name="gambar">
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary">Simpan Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>