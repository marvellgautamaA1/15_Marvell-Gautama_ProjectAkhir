<?php
$koneksi = mysqli_connect("localhost", "root", "mysql", "proyek akhir");
//echo("koneksi berhasil");
//cek koneksi
if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>