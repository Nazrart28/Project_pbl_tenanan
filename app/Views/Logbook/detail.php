<?= $this->extend('layout/dashboard-layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Logbook</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <!--  
                    <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text"><b>Tanggal :</b> <?= $logbook['tanggal']; ?></p>
                            <p class="card-text"><b>Kegiatan :</b> <?= $logbook['kegiatan']; ?></p>

                            <a href="/logbook/edit/<?= $logbook['id_logbook']; ?>" class="btn btn-warning">Edit</a>

                            <form action="/logbook/<?= $logbook['id_logbook']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                            </form>


                            <br><br>
                            <a href="/logbook/index">back</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>