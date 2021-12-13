<title>Perpus | Buku</title>
<?php
    include 'session_check.php';
    include 'koneksi.php';
    include 'template.php';
    include 'function.php';
?>
<div class="container m-5 mx-auto">
    <h2>Buku</h2>
    <a class="btn btn-primary mb-2" href="buku_tambah.php">Tambah Buku</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Rak</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>            
            </tr>
        </thead>
        <tbody>
        <?php 
            $datas = query("SELECT * FROM buku INNER JOIN rak ON buku.kode_rak = rak.kode_rak");
            $no = 1;
            foreach($datas as $data):
        ?>
            <tr>
                <th scope="row" class="text-center"><?= $data['kode_buku'] ?></th>
                <td><?= $data['judul'] ?></td>
                <td><?= $data['penulis'] ?></td>
                <td><?= $data['penerbit'] ?></td>
                <td><?= $data['tahun_terbit'] ?></td>
                <td><?= $data['nama_rak'] ?></td>
                <td><?= $data['status'] ? 'Dipinjam' : 'Tidak Dipinjam' ?></td>
                <td>
                    <a href="buku_edit.php?id=<?= $data['kode_buku'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="buku_hapus.php?id=<?= $data['kode_buku'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>