<title>Sensus | Person Edit</title>
<?php
    include 'session_check.php';
    include 'koneksi.php';
    include 'template.php';
    include 'function.php';
    include 'function_anggota.php';
    
    $kode_anggota = $_GET['id'];

    $anggota = query("SELECT * FROM anggota WHERE kode_anggota = '$kode_anggota'")[0];

    if(isset($_POST['kirim'])){
        if(anggota_edit($_POST)){
            echo "
                <script>
                    alert('Anggota berhasil diubah!');
                    location.href = 'anggota.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Anggota gagal diubah!');
                </script>
            ";
        }
    }
?>
<div class="container m-5 mx-auto">
    <h2>Edit Anggota</h2>
    <form class="col-5" method="POST">
        <div class="form-group">
            <label for="kode_anggota">Kode Anggota</label>
            <input type="text" name="kode_anggota" class="form-control" id="kode_anggota" value="<?= $anggota['kode_anggota'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama" value="<?= $anggota['nama'] ?>" required>
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-control" required>
                <option value="L" <?php if($anggota['jk'] == 'L') 'selected' ?>>Laki-laki</option>
                <option value="P" <?php if($anggota['jk'] == 'P') 'selected' ?>>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan jurusan" value="<?= $anggota['jurusan'] ?>" required>
        </div>
        <div class="form-group">
            <label for="angkatan">Angkatan</label>
            <input type="number" name="angkatan" class="form-control" id="angkatan" placeholder="Masukkan angkatan" value="<?= $anggota['angkatan'] ?>" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat" value="<?= $anggota['alamat'] ?>" required>
        </div>
        <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
    </form>
</div>