<?php

$koneksi = mysqli_connect("localhost", "root", "", "data_santri");

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $nama_ayah = htmlspecialchars($data["nama_ayah"]);
    $nama_ibu = htmlspecialchars($data["nama_ibu"])  ;

    
   $query = "INSERT INTO tb_santri
   VALUES ('', '$nama', '$alamat', '$no_telp', '$nama_ayah', '$nama_ibu')
   ";
   mysqli_query($koneksi, $query);
    
   return mysqli_affected_rows($koneksi);
}

function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_santri WHERE id = $id" );

    return mysqli_affected_rows($koneksi);
}

?>