<?php 
include '../koneksi.php';
$id = $_GET['id'];

$myConn->query( "delete from pinjam where pinjam_id='$id'");
header("location:peminjaman.php");
