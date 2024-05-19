<?php 
include '../koneksi.php';
$id = $_GET['id'];
$data = $myConn->query( "select * from user where user_id='$id'");
$d =$data->fetch_assoc($data);
$foto = $d['user_foto'];
unlink("../gambar/user/$foto");
$myConn->query( "delete from user where user_id='$id'");
header("location:user.php");
