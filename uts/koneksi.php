<?php
    $namaserver = "localhost";
    $username = "root";
    $password = "";
    $namadb = "uts";

    //buat koneksi
    global $koneksi;
    $koneksi = mysqli_connect($namaserver,$username,$password,$namadb);
    //cek koneksi
    if (!$koneksi){
        die ("Gagal Melakukan Koneksi Ke Database." . mysqli_connect_error());
    }
?>