<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Data</h2>
            <form action="/mitra/save" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="mitra" class="form-label">Mitra</label>
                    <input type="text" class="form-control" id="mitra" name="mitra" value="<?= old('mitra'); ?>">
                </div>
                <div class="mb-3">
                    <label for="proyek" class="form-label">Proyek</label>
                    <input type="text" class="form-control" id="proyek" name="proyek" value="<?= old('proyek'); ?>">
                </div>
                <div class="mb-3">
                    <label for="Deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" value="<?= old('deskripsi'); ?>" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="kelompok" class="form-label">Kelompok</label>
                    <input type="text" class="form-control <?= ($validation->hasError('kelompok')) ?'is-invalid' : ''; ?>" id="kelompok" name="kelompok" value="<?= old('kelompok'); ?>">
                    <div class="invalid-feedback">
                        Isikan nomor kelompok dengan benar.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>