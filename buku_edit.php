<title>Perpus | Buku Edit</title>
<?php
    include 'session_check.php';
    include 'koneksi.php';
    include 'template.php';
    include 'function.php';
    include 'function_buku.php';
    
    $kode_buku = $_GET['id'];

    $buku = query("SELECT * FROM buku WHERE kode_buku = '$kode_buku'")[0];

    if(isset($_POST['kirim'])){
        if(buku_edit($_POST)){
            echo "
                <script>
                    alert('Buku berhasil diubah!');
                    location.href = 'buku.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Buku gagal diubah!');
                </script>
            ";
        }
    }
?>
<div class="container m-5 mx-auto">
    <h2>Edit Buku</h2>
    <form class="col-5" method="POST">
        <div class="form-group">
            <label for="kode_buku">Kode Buku</label>
            <input type="text" name="kode_buku" class="form-control" id="kode_buku" value="<?= $buku['kode_buku'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul" value="<?= $buku['judul'] ?>" required>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" class="form-control" id="penulis" placeholder="Masukkan penulis" value="<?= $buku['penulis'] ?>" required>
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Masukkan penerbit" value="<?= $buku['penerbit'] ?>" required>
        </div>
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" id="tahun_terbit" placeholder="Masukkan tahun terbit" value="<?= $buku['tahun_terbit'] ?>" required>
        </div>
        <div class="form-group">
            <label for="kode_rak">Pilih Rak</label>
            <select name="kode_rak" id="kode_rak" class="form-control">
            <?php
                $rak = query("SELECT * FROM rak");
                foreach($rak as $rk): ?>
                    <option value="<?= $rk['kode_rak'] ?>"
                    <?php if($rk['kode_rak'] == $buku['kode_rak']) echo 'selected'; ?>
                    ><?= $rk['nama_rak'] ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
    </form>
</div>