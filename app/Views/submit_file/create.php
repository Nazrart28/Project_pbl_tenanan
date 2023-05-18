<?= $this->extend('layout/dashboard-layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Files</h2>
            <form action="/submit_file/save" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="nama_file" name="nama_file" value="<?= old('nama_file'); ?>">
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" class="form-control" id="file" name="file" value="<?= old('file'); ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>