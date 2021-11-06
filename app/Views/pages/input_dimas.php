<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h4><?= $title; ?></h4>
    <div class="row">
        <div class="col-8">
            <form action="/kegiatandimas/save" method="post">
                <div class="row mb-3">
                    <label for="nama" class="col-form-label col-sm-2">Nama Kegiatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="poin" class="col-form-label col-sm-2">Poin Kegiatan</label>
                    <div class="col-sm-6">
                        <input type="number" min="0" max="100" class="form-control" id="poin" name="poin" value="0">
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>