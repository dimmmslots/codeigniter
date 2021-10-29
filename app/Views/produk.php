<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produk as $p) : ?>
                        <tr>
                            <th scope="row"><?= $p['kode']; ?></th>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['harga']; ?></td>
                            <td><a href="/produk/detail/<?= $p['kode'];?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection();; ?>