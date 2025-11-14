<?php

include 'koneksi.php';
$class = $_POST['class'];
$price = $_POST['price'];
$beds = $_POST['beds']; 
$nights = $_POST['nights'];
$valet = isset($_POST['valet']) ? 1 : 0;

mysqli_query($koneksi, "insert into rooms (class, price, beds, nights, valet) values ('$class', '$price', '$beds', '$nights', '$valet')");

header("location: index1.php");
?>