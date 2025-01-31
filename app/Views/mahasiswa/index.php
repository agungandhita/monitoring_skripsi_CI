<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <h1><?= $title; ?></h1>
    <a href="/mahasiswa/create" class="btn btn-primary mb-3">Tambah Data</a>
    
    <?php if(session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Judul Skripsi</th>
                <th>Dosen Pembimbing</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($mahasiswa as $m) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $m['nama_mahasiswa']; ?></td>
                    <td><?= $m['nim']; ?></td>
                    <td><?= $m['program_studi']; ?></td>
                    <td><?= $m['judul_skripsi']; ?></td>
                    <td><?= $m['dosen_pembimbing']; ?></td>
                    <td>
                        <a href="/mahasiswa/edit/<?= $m['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/mahasiswa/delete/<?= $m['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>