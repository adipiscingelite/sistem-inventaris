<?php 
// menghubungkan dengan koneksi
include 'db_connect.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);


//nyoba
//echo "user : ".$username;
//echo "<br>";
//echo "passwpr : ".$password;
//die ();


$rsUser = $myConn->query("sELECT * FROM user WHERE user_username='$username' AND user_password='$password'");
//$login = mysqli_query($koneksi, "SELECT * FROM user WHERE user_username='$username' AND user_password='$password'");
//$cek = mysqli_num_rows($login);

$cek = $rsUser->num_rows;

//echo "cek".$cek;
//echo "koneksi gagal".$koneksi->connect_errno;
//echo "<br>";


//die ("");


if($cek > 0){
	session_start();
	$data = $rsUser->fetch_assoc();
	
	//echo var_dump($data);
	//die ("stop");
	
	$_SESSION['id'] = $data['user_id'];
	$_SESSION['nama'] = $data['user_nama'];
	$_SESSION['username'] = $data['user_username'];
	$_SESSION['level'] = $data['user_level'];
	//die ("stop");	

	if($data['user_level'] == "administrator"){
		header("location:admin/");
	}else if($data['user_level'] == "manajemen"){
		header("location:manajemen/");
	}else{
		
		header("location:index.php?alert=gagal");
	}
}else{
	//die ("Login Gagal ");
	header("location:index.php?alert=gagal");
}
