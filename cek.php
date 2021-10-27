<?php session_start();
 
include 'koneksi.php';
 
$email = $_POST['email'];
$password = $_POST['password'];
 
$login = mysqli_query($koneksi,"select * from user where email='$email' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="admin"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		header("location:halaman_admin.php");
 
	}else if($data['level']=="user"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "user";
		header("location:halaman_user.php");
 
	}else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>