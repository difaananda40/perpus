<title>Perpus | Rak Edit</title>
<?php
    include 'session_check.php';
    include 'koneksi.php';
    include 'template.php';
    include 'function.php';
    include 'function_rak.php';
    
    $kode_rak = $_GET['id'];

    $rak = query("SELECT * FROM rak WHERE kode_rak = '$kode_rak'")[0];

    if(isset($_POST['kirim'])){
        if(rak_edit($_POST)){
            echo "
                <script>
                    alert('Rak berhasil diubah!');
                    location.href = 'rak.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Rak gagal diubah!');
                </script>
            ";
        }
    }
?>
<div class="container m-5 mx-auto">
    <h2>Edit Rak</h2>
    <form class="col-5" method="POST">
        <div class="form-group">
            <label for="kode_rak">Kode Rak</label>
            <input type="text" name="kode_rak" class="form-control" id="kode_rak" value="<?= $rak['kode_rak'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_rak">Nama_Rak</label>
            <input type="text" name="nama_rak" class="form-control" id="nama_rak" placeholder="Masukkan nama_rak" value="<?= $rak['nama_rak'] ?>" required>
        </div>
        <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
    </form>
</div>