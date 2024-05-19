<?php 
include '../koneksi.php';
$id = $_GET['id'];



$bm = $myConn->query("select * from barang_masuk where bm_id='$id'");
$barang_masuk = $bm->fetch_assoc($bm);
$id_barang_masuk = $barang_masuk['bm_id_barang'];
$jumlah_barang_masuk = $barang_masuk['bm_jumlah'];


$b = $myConn->query("select * from barang where barang_id='$id_barang_masuk'");
$barang = $b->fetch_assoc();
$jumlah_barang = $barang['barang_jumlah'];

// ubah jumlah stok data barang
$ubah_jumlah = $jumlah_barang-$jumlah_barang_masuk;

$myConn->query("update barang set barang_jumlah='$ubah_jumlah' where barang_id='$id_barang_masuk'");

$myConn->query( "delete from barang_masuk where bm_id='$id'");
header("location:barang_masuk.php");
