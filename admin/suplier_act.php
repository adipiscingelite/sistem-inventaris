<?php 
include '../koneksi.php';
$nama  = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

$myConn->query( "insert into suplier values (NULL,'$nama ','$alamat','$telepon')");
header("location:suplier.php");