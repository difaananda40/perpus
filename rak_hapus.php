<?php
include 'function.php';
include 'function_rak.php';

if(isset($_GET['id'])){
    if(rak_hapus($_GET['id'])){
        echo "
            <script>
                alert('Rak berhasil dihapus!');
                location.href = 'rak.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Rak berhasil dihapus!');
                location.href = 'rak.php';
            </script>
        ";
    }
}