<title>Perpus | Tambah Rak</title>
<?php
    include 'session_check.php';
    include 'koneksi.php';
    include 'template.php';
    include 'function.php';
    include 'function_rak.php';

    if(isset($_POST['kirim'])){
        if(rak_tambah($_POST)){
            echo "
                <script>
                    alert('Rak berhasil ditambah!');
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Rak gagal ditambah!');
                </script>
            ";
        }
    }
?>
<div class="container m-5 mx-auto">
    <h2>Tambah Rak</h2>
    <form class="col-5" method="POST">
        <div class="form-group">
            <label for="kode_buku">Kode Rak</label>
            <input type="text" name="kode_rak" class="form-control" id="kode_rak" placeholder="Masukkan kode rak" required>
        </div>
        <div class="form-group">
            <label for="nama_rak">Nama Rak</label>
            <input type="text" name="nama_rak" class="form-control" id="nama_rak" placeholder="Masukkan nama_rak" required>
        </div>
        
        <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
    </form>
</div>