<title>Perpus | Peminjaman</title>
<?php
    include 'session_check.php';
    include 'koneksi.php';
    include 'template.php';
    include 'function.php';
?>
<div class="container m-5 mx-auto">
    <h2>Peminjaman</h2>
    <a class="btn btn-primary mb-2" href="peminjaman_tambah.php">Tambah Peminjaman</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col">Buku</th>
                <th scope="col">Petugas</th>
                <th scope="col">Anggota</th>
                <th scope="col">Tgl Pinjam</th>
                <th scope="col">Tgl Kembali</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $datas = query("SELECT *,
                petugas.nama as nama_petugas,
                anggota.nama as nama_anggota 
                FROM `peminjaman`
                INNER JOIN buku ON peminjaman.kode_buku = buku.kode_buku
                INNER JOIN petugas ON peminjaman.kode_petugas = petugas.kode_petugas
                INNER JOIN anggota ON peminjaman.kode_anggota = anggota.kode_anggota");
            $no = 1;
            foreach($datas as $data):
        ?>
            <tr>
                <th scope="row" class="text-center"><?= $data['kode_pinjam'] ?></th>
                <td><?= $data['judul'] ?></td>
                <td><?= $data['nama_petugas'] ?></td>
                <td><?= $data['nama_anggota'] ?></td>
                <td><?= $data['tanggal_pinjam'] ?></td>
                <td><?= $data['tanggal_kembali'] ?></td>
                <td>
                    <a href="peminjaman_hapus.php" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>