<?php
include 'koneksi.php';

$id = $_POST['id'];
$class = $_POST['class'];
$price = $_POST['price'];
$beds = $_POST['beds'];
$nights = $_POST['nights'];
$valet = $_POST['valet'];

mysqli_query($koneksi, "update rooms set class='$class', price='$price' ,beds='$beds', nights = '$nights', valet = '$valet' where id='$id'");

header("location:index1.php");
?>
