<?php

function peminjaman_tambah($data){
    global $konek;
    $kode_petugas = $data['kode_petugas'];
    $kode_buku = $data['kode_buku'];
    $kode_anggota = $data['kode_anggota'];
    $tanggal_pinjam = $data['tanggal_pinjam'];
    $tanggal_kembali = $data['tanggal_kembali'];

    $query = mysqli_query($konek, "INSERT INTO peminjaman VALUES(
                                   'P-' . (SELECT COUNT(*) FROM peminjaman) + 1,
                                   '$tanggal_pinjam',
                                   '$tanggal_kembali',
                                   '$kode_buku',
                                   '$kode_petugas',
                                   '$kode_anggota'
    )");
    
    echo mysqli_error($konek);

    return $query;
}

function rak_hapus($id){
    global $konek;

    $query = mysqli_query($konek, "DELETE FROM rak WHERE kode_rak = '$id'");

    return $query;
}