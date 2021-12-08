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

function rupiah($rp){
    $formatted = number_format($rp, 0, ',', '.');
    return 'Rp. ' . $formatted;
}

function anggota_tambah($data){
    global $konek;
    $kode_anggota = $data['kode_anggota'];
    $nama = $data['nama'];
    $jk = $data['jk'];
    $jurusan = $data['jurusan'];
    $angkatan = $data['angkatan'];
    $alamat = $data['alamat'];

    $query = mysqli_query($konek, "INSERT INTO anggota VALUES(
                                   '$kode_anggota',
                                   '$nama',
                                   '$jk',
                                   '$jurusan',
                                   '$angkatan',
                                   '$alamat'
    )");

    return $query;
}

function anggota_edit($data){
    global $konek;
    $kode_anggota = $data['kode_anggota'];
    $nama = $data['nama'];
    $jk = $data['jk'];
    $jurusan = $data['jurusan'];
    $angkatan = $data['angkatan'];
    $alamat = $data['alamat'];

    $query = mysqli_query($konek, "UPDATE anggota SET
                                   nama = '$nama',
                                   jk = '$jk',
                                   jurusan = '$jurusan',
                                   angkatan = '$angkatan',
                                   alamat = '$alamat'
                                   WHERE kode_anggota = '$kode_anggota'
    ");

    return $query;
}

function anggota_hapus($id){
    global $konek;

    $query = mysqli_query($konek, "DELETE FROM anggota WHERE kode_anggota = '$id'");

    return $query;
}