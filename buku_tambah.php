<title>Perpus | Tambah Buku</title>
<?php
    include 'session_check.php';
    include 'koneksi.php';
    include 'template.php';
    include 'function.php';
    include 'function_buku.php';

    if(isset($_POST['kirim'])){
        if(buku_tambah($_POST)){
            echo "
                <script>
                    alert('Buku berhasil ditambah!');
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Buku gagal ditambah!');
                </script>
            ";
        }
    }
?>
<div class="container m-5 mx-auto">
    <h2>Tambah Buku</h2>
    <form class="col-5" method="POST">
        <div class="form-group">
            <label for="kode_buku">Kode Buku</label>
            <input type="text" name="kode_buku" class="form-control" id="kode_buku" placeholder="Masukkan kode buku" required>
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul" required>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" class="form-control" id="penulis" placeholder="Masukkan penulis" required>
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Masukkan penerbit" required>
        </div>
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" id="tahun_terbit" placeholder="Masukkan tahun terbit" required>
        </div>
        <div class="form-group">
            <label for="kode_rak">Pilih Rak</label>
            <select name="kode_rak" id="kode_rak" class="form-control">
                <option disabled selected hidden>Pilih rak</option>
            <?php
                $rak = query("SELECT * FROM rak");
                foreach($rak as $rk): ?>
                    <option value="<?= $rk['kode_rak'] ?>"><?= $rk['nama_rak'] ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
    </form>
</div>