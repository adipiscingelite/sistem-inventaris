<?php 
include '../koneksi.php';
$barang  = $_POST['barang'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$lokasi = $_POST['lokasi'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];


$b = $myConn->query($"select * from barang where barang_id='$barang'");
$bb = $b->fetch_assoc();
$nama_barang = $bb['barang_nama'];
$jumlah_barang = $bb['barang_jumlah'];

// cek jika jumlah yang diinput lebih besar dari jumlah barang yang ada
if($jumlah > $jumlah_barang){
	header("location:barang_keluar.php?alert=lebih");
}else{

	// kurangi jumlah data barang
	$jumlah_baru = $jumlah_barang-$jumlah;
	$myConn->query("update barang set barang_jumlah='$jumlah_baru' where barang_id='$barang'");

	$myConn->query("insert into barang_keluar values (NULL,'$barang','$nama_barang','$tanggal','$jumlah','$lokasi','$penerima','$keterangan')");
	header("location:barang_keluar.php");
}



