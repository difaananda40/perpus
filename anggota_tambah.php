<title>Perpus | Tambah Anggota</title>
<?php
    include 'session_check.php';
    include 'koneksi.php';
    include 'template.php';
    include 'function.php';

    if(isset($_POST['kirim'])){
        if(anggota_tambah($_POST)){
            echo "
                <script>
                    alert('Anggota berhasil ditambah!');
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Anggota gagal ditambah!');
                </script>
            ";
        }
    }
?>
<div class="container m-5 mx-auto">
    <h2>Tambah Anggota</h2>
    <form class="col-5" method="POST">
        <div class="form-group">
            <label for="kode_anggota">Kode Anggota</label>
            <input type="text" name="kode_anggota" class="form-control" id="kode_anggota" placeholder="Masukkan kode anggota" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama" required>
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-control" required>
                <option disabled selected hidden>Pilih jenis kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan jurusan" required>
        </div>
        <div class="form-group">
            <label for="angkatan">Angkatan</label>
            <input type="number" name="angkatan" class="form-control" id="angkatan" placeholder="Masukkan angkatan" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat" required>
        </div>
        <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
    </form>
</div>