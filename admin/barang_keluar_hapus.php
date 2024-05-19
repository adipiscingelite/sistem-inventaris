<?php 
include '../koneksi.php';
$id = $_GET['id'];



$bk = $myConn->query("select * from barang_keluar where bk_id='$id'");
$barang_keluar = $bk->fetch_assoc();
$id_barang_keluar = $barang_keluar['bk_id_barang'];
$jumlah_barang_keluar = $barang_keluar['bk_jumlah_keluar'];


$b = $myConn->query("select * from barang where barang_id='$id_barang_keluar'");
$barang = $b->fetch_assoc();
$jumlah_barang = $barang['barang_jumlah'];

// ubah jumlah stok data barang
$ubah_jumlah = $jumlah_barang+$jumlah_barang_keluar;

$myConn("update barang set barang_jumlah='$ubah_jumlah' where barang_id='$id_barang_keluar'");

$myConn->query( "delete from barang_keluar where bk_id='$id'");
header("location:barang_keluar.php");
