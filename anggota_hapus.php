<?php
include 'function.php';

if(isset($_GET['id'])){
    if(anggota_hapus($_GET['id'])){
        echo "
            <script>
                alert('Anggota berhasil dihapus!');
                location.href = 'anggota.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Anggota berhasil dihapus!');
                location.href = 'anggota.php';
            </script>
        ";
    }
}