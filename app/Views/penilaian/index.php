<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-info mb-3 " style="border-top-width: 4px;">
                <h1 class="mt-2">Form Penilaian</h1>
                <a href="/penilaian/create" class="btn btn-success mb-3" style="width: 10rem;">Input Nilai</a>
                <a href="/penilaian/cetak" class="btn btn-primary float-right" style="width: 10rem;">Cetak</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Mahasiswa</th>
                            <th scope="col">UTS</th>
                            <th scope="col">UAS</th>
                            <th scope="col">Nilai Akhir</th>
                            <th scope="col">Skala</th>
                            <th scope="col">Huruf</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($Penilaian as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['nim']; ?></td>
                                <td><?= $p['nama_mhs']; ?></td>
                                <td><?= $p['uts']; ?></td>
                                <td><?= $p['uas']; ?></td>
                                <td><?= $p['nilai_akhir']; ?></td>
                                <td><?= $p['skala']; ?></td>
                                <td><?= $p['huruf']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>