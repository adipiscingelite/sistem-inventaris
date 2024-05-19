<?php 
include '../db_connect.php';
$nama  = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == ""){
	$myConn->query( "insert into user values (NULL,'$nama','$username','$password','','$level')");
	header("location:user.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:user.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		$myConn->query( "insert into user values (NULL,'$nama','$username','$password','$file_gambar','$level')");
		header("location:user.php");
	}
}

