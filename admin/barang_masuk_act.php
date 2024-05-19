<?php 
include '../koneksi.php';
$barang  = $_POST['barang'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$suplier = $_POST['suplier'];


$b = $myConn->query("select * from barang where barang_id='$barang'");
$bb = $b->fetch_assoc();
$nama_barang = $bb['barang_nama'];

$s = $myConn->query("select * from suplier where suplier_id='$suplier'");
$ss = $s->fetch_assoc();
$nama_suplier = $ss['suplier_nama'];

// tambah jumlah data barang
$jumlah_lama = $bb['barang_jumlah'];
$jumlah_baru = $jumlah_lama+$jumlah;
$myConn->query("update barang set barang_jumlah='$jumlah_baru' where barang_id='$barang'");

$myConn->query( "insert into barang_masuk values (NULL,'$barang','$nama_barang','$tanggal','$jumlah','$suplier','$nama_suplier')");
header("location:barang_masuk.php");