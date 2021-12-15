<title>Perpus | Tambah Peminjaman</title>
<?php
    include 'session_check.php';
    include 'koneksi.php';
    include 'template.php';
    include 'function.php';
    include 'function_peminjaman.php';

    if(isset($_POST['kirim'])){
        if(peminjaman_tambah($_POST)){
            echo "
                <script>
                    alert('Peminjaman berhasil ditambah!');
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Peminjaman gagal ditambah!');
                </script>
            ";
        }
    }
?>
<div class="container m-5 mx-auto">
    <h2>Tambah Peminjaman</h2>
    <form class="col-5" method="POST">
        <input type="hidden" name="kode_petugas" class="form-control" id="kode_petugas" value="<?= $ses_id ?>">
        <div class="form-group">
            <label for="petugas">Petugas</label>
            <input type="text" name="petugas" class="form-control" id="petugas" value="<?= $ses_nama ?>" readonly>
        </div>
        <div class="form-group">
            <label for="kode_buku">Pilih buku</label>
            <select name="kode_buku" id="kode_buku" class="form-control">
                <option disabled selected hidden>Pilih buku</option>
            <?php
                $buku = query("SELECT * FROM buku");
                foreach($buku as $bk): ?>
                    <option value="<?= $bk['kode_buku'] ?>"><?= $bk['judul'] ?> oleh <?= $bk['penulis'] ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="kode_anggota">Pilih anggota</label>
            <select name="kode_anggota" id="kode_anggota" class="form-control">
                <option disabled selected hidden>Pilih anggota</option>
            <?php
                $anggota = query("SELECT * FROM anggota");
                foreach($anggota as $ag): ?>
                    <option value="<?= $ag['kode_anggota'] ?>"><?= $ag['nama'] ?></option>
            <?php endforeach; ?>
            </select>
        </div>  
        <div class="form-group">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam">
        </div>
        <div class="form-group">
            <label for="tanggal_kembali">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali">
        </div>
        <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
    </form>
</div>