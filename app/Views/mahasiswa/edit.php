<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <h1><?= $title; ?></h1>
    <div class="row">
        <div class="col-8">
            <form action="/mahasiswa/update/<?= $mahasiswa['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="<?= $mahasiswa['nama_mahasiswa']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="program_studi" class="form-label">Program Studi</label>
                    <input type="text" class="form-control" id="program_studi" name="program_studi" value="<?= $mahasiswa['program_studi']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="judul_skripsi" class="form-label">Judul Skripsi</label>
                    <textarea class="form-control" id="judul_skripsi" name="judul_skripsi" rows="3" required><?= $mahasiswa['judul_skripsi']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="dosen_pembimbing" class="form-label">Dosen Pembimbing</label>
                    <input type="text" class="form-control" id="dosen_pembimbing" name="dosen_pembimbing" value="<?= $mahasiswa['dosen_pembimbing']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
                <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>