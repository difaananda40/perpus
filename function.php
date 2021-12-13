<?php
include 'koneksi.php';

function query($query){
    global $konek;
    $get_data = mysqli_query($konek, $query);
    $data = array();
    
    while($row = mysqli_fetch_assoc($get_data)){
        $data[] = $row;
    }

    return $data;
}