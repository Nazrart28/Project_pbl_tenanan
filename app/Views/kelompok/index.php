<?= $this->extend('layout/dashboard-layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <h1 class="mt-2">Pembagian kelompok</h1>
            <a href="/kelompok/create" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">nama</th>
                        <th scope="col">nim</th>
                        <th scope="col">kelas</th>
                        <th scope="col">kelompok</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kelompok as $m) : ?>
                        <tr>
                            <th scope="id"><?= $i++; ?>
                            <td><?= $m['nama']; ?></td>
                            <td><?= $m['nim']; ?></td>
                            <td><?= $m['kelas']; ?></td>
                            <td><?= $m['kelompok']; ?></td>
                            <td>
                                <a href="/kelompok/<?= $m['id']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>