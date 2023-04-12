<?= $this->extend('layout/dashboard-layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Logbook</h1>
            <a href="/logbook/create" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kegiatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($logbook as $l) : ?>
                        <tr>
                            <th scope="id"><?= $i++; ?></th>
                            <td><?= $l['tanggal']; ?></td>
                            <td><?= $l['kegiatan']; ?></td>
                        </tr>
                        <td>
                            <a href="/logbook/<?= $l['id_logbook']; ?>" class="btn btn-success">Detail</a>
                        </td>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>