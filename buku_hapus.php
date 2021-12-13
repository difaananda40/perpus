<?php
include 'function.php';
include 'function_buku.php';

if(isset($_GET['id'])){
    if(buku_hapus($_GET['id'])){
        echo "
            <script>
                alert('Buku berhasil dihapus!');
                location.href = 'buku.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Buku berhasil dihapus!');
                location.href = 'buku.php';
            </script>
        ";
    }
}