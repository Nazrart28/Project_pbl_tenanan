<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Logbook</h1>
            <a href="/logbook/create" class="btn btn-primary mb-3">Logbook</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
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
                            <a href="/logbook/<?= $l['tanggal']; ?>" class="btn btn-success">Lihat</a>
                        </td>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>