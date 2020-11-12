<?php

$server = "localhost";
$user    = "root";
$password = "";
$nama_db = "tk_sepatu";

$koneksi = mysqli_connect($server, $user, $password, $nama_db);

if (!$koneksi) {
    echo "Koneksi Database Gagal";
}
