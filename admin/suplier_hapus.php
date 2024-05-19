<?php 
include '../koneksi.php';
$id = $_GET['id'];

$myConn->query( "delete from suplier where suplier_id='$id'");
header("location:suplier.php");
