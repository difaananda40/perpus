<title>Perpus | Anggota</title>
<?php
    include 'session_check.php';
    include 'koneksi.php';
    include 'template.php';
    include 'function.php';
?>
<div class="container m-5 mx-auto">
    <h2>Anggota</h2>
    <a class="btn btn-primary mb-2" href="anggota_tambah.php">Tambah Anggota</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $datas = query("SELECT * FROM anggota");
            $no = 1;
            foreach($datas as $data):
        ?>
            <tr>
                <th scope="row" class="text-center"><?= $data['kode_anggota'] ?></th>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jk'] === 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                <td><?= $data['jurusan'] ?></td>
                <td><?= $data['angkatan'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td>
                    <a href="anggota_edit.php?id=<?= $data['kode_anggota'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="anggota_hapus.php?id=<?= $data['kode_anggota'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>