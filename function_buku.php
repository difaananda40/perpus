<?php

function buku_tambah($data){
    global $konek;
    $kode_buku = $data['kode_buku'];
    $judul = $data['judul'];
    $penulis = $data['penulis'];
    $penerbit = $data['penerbit'];
    $tahun_terbit = intval($data['tahun_terbit']);
    $kode_rak = $data['kode_rak'];

    $query = mysqli_query($konek, "INSERT INTO buku VALUES(
                                   '$kode_buku',
                                   '$judul',
                                   '$penulis',
                                   '$penerbit',
                                   '$tahun_terbit',
                                   '$kode_rak'
    )");

    return $query;
}

function buku_edit($data){
    global $konek;
    $kode_buku = $data['kode_buku'];
    $judul = $data['judul'];
    $penulis = $data['penulis'];
    $penerbit = $data['penerbit'];
    $tahun_terbit = intval($data['tahun_terbit']);
    $kode_rak = $data['kode_rak'];

    $query = mysqli_query($konek, "UPDATE buku SET
                                   judul = '$judul',
                                   penulis = '$penulis',
                                   penerbit = '$penerbit',
                                   tahun_terbit = '$tahun_terbit',
                                   kode_rak = '$kode_rak'
                                   WHERE kode_buku = '$kode_buku'
    ");

    return $query;
}

function buku_hapus($id){
    global $konek;

    $query = mysqli_query($konek, "DELETE FROM buku WHERE kode_buku = '$id'");

    return $query;
}