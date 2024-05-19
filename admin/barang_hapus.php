<?php 
include '../koneksi.php';
$id = $_GET['id'];

$myConn->query("delete from barang where barang_id='$id'");

$myConn->query($koneksi, "delete from barang_masuk where bm_id_barang='$id'");
$myConn->query($koneksi, "delete from barang_keluar where bk_id_barang='$id'");

header("location:barang.php");
