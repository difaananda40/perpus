<?php
session_start();
if(empty($_SESSION['status'])){
    header('location: login.php');
}

$ses_id = $_SESSION['kode_petugas'];
$ses_nama = $_SESSION['nama'];