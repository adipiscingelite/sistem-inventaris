<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$barang  = $_POST['barang'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$lokasi = $_POST['lokasi'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];


$b = $myConn->query("select * from barang where barang_id='$barang'");
$bb = $b->fetch_assoc();
$nama_barang = $bb['barang_nama'];
$jumlah_barang = $bb['barang_jumlah'];

$bk = $myConn->query("select * from barang_keluar where bk_id='$id'");
$barang_keluar = $bk->fetch_assoc();
$id_barang = $barang_keluar['bk_id_barang'];
$jumlah_barang_keluar = $barang_keluar['bk_jumlah_keluar'];


$x = $myConn->query("select * from barang where barang_id='$id_barang'");
$xx = $x->fetch_assoc();
$jumlah_x = $xx['barang_jumlah'];


// cek jika jumlah yang diinput lebih besar dari jumlah barang yang ada
$kembalikan_jumlah = $jumlah_x+$jumlah_barang_keluar;
if($jumlah > $kembalikan_jumlah){
	header("location:barang_keluar.php?alert=lebih");
}else{

	// kurangi jumlah data barang
	$myConn->query("update barang set barang_jumlah='$kembalikan_jumlah' where barang_id='$id_barang'");

	$myConn->query("update barang_keluar set bk_id_barang='$barang', bk_nama_barang='$nama_barang', bk_tgl_keluar='$tanggal', bk_jumlah_keluar='$jumlah', bk_lokasi='$lokasi', bk_penerima='$penerima', bk_keterangan='$keterangan' where bk_id='$id'");
	
	// update stok barang
	if($jumlah > $jumlah_barang){
		header("location:barang_keluar.php?alert=lebih");
	}else{
		$j = $jumlah_barang-$jumlah;
		$myConn->query("update barang set barang_jumlah='$j' where barang_id='$barang'");
		header("location:barang_keluar.php");
	}
}