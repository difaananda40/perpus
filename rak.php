<title>Perpus | Rak</title>
<?php
    include 'session_check.php';
    include 'koneksi.php';
    include 'template.php';
    include 'function.php';
?>
<div class="container m-5 mx-auto">
    <h2>Rak</h2>
    <a class="btn btn-primary mb-2" href="rak_tambah.php">Tambah Rak</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col">Nama_Rak</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $datas = query("SELECT * FROM rak");
            $no = 1;
            foreach($datas as $data):
        ?>
            <tr>
                <th scope="row" class="text-center"><?= $data['kode_rak'] ?></th>
                <td><?= $data['nama_rak'] ?></td>
                <td>
                    <a href="rak_edit.php?id=<?= $data['kode_rak'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="rak_hapus.php?id=<?= $data['kode_rak'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>