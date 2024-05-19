<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$barang_baru  = $_POST['barang'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$suplier = $_POST['suplier'];

// kembalikan data barang
// barang masuk

$bm = $myConn->query("select * from barang_masuk where bm_id='$id'");
$barang_masuk = $bm->fetch_assoc();
$id_barang_masuk = $barang_masuk['bm_id_barang'];
$jumlah_barang_masuk = $barang_masuk['bm_jumlah'];


$b = $myConn->query("select * from barang where barang_id='$id_barang_masuk'");
$barang = $b->fetch_assoc();
$jumlah_barang = $barang['barang_jumlah'];
$nama_barang = $barang['barang_nama'];

// ubah jumlah stok data barang
$ubah_jumlah = $jumlah_barang-$jumlah_barang_masuk;

$myConn->query("update barang set barang_jumlah='$ubah_jumlah' where barang_id='$id_barang_masuk'");

// akhir kembalikan data barang

$s = $myConn->query("select * from suplier where suplier_id='$suplier'");
$ss = $s->fetch_assoc();
$nama_suplier = $ss['suplier_nama'];

// update jumlah barang
$ubah_jumlah_baru = $ubah_jumlah+$jumlah;
$myConn->query("update barang set barang_jumlah='$ubah_jumlah_baru' where barang_id='$barang_baru'");

// update data barang masuk
$myConn->query("update barang_masuk set bm_id_barang='$barang_baru', bm_nama_barang='$nama_barang', bm_tgl_masuk='$tanggal', bm_jumlah='$jumlah', bm_id_suplier='$suplier', bm_nama_suplier='$nama_suplier' where bm_id='$id'");

header("location:barang_masuk.php");