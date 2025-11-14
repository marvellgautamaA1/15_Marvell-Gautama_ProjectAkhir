<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from rooms where id='$id'");

header("location:index1.php");
?>
