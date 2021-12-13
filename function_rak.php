<?php

function rak_tambah($data){
    global $konek;
    $kode_rak = $data['kode_rak'];
    $nama_rak = $data['nama_rak'];

    $query = mysqli_query($konek, "INSERT INTO rak VALUES(
                                   '$kode_rak',
                                   '$nama_rak'
    )");

    return $query;
}

function rak_edit($data){
    global $konek;
    $kode_rak = $data['kode_rak'];
    $nama_rak = $data['nama_rak'];

    $query = mysqli_query($konek, "UPDATE rak SET
                                   nama_rak = '$nama_rak'
                                   WHERE kode_rak = '$kode_rak'
    ");

    return $query;
}

function rak_hapus($id){
    global $konek;

    $query = mysqli_query($konek, "DELETE FROM rak WHERE kode_rak = '$id'");

    return $query;
}