<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include("config.php");
session_start();
extract($_POST);
$username = $_POST['username'];
$password = md5($password);
$result = mysqli_query($connect,"SELECT * FROM users WHERE username='$username'");
$result2 = mysqli_query($connect,"SELECT * FROM users WHERE username='$username' AND password='$password'");
$numrows = mysqli_num_rows($result);
$numrows2 = mysqli_num_rows($result2);
$row1 = mysqli_fetch_array($result2);
if($numrows==0){
	echo "<script>alert('Username Tidak Ada');location.replace('index.php');</script>";	

}else{
	if($numrows2==0){
	 	echo "<script>alert('Salah Password atau Username');location.replace('index.php');</script>";	
	}else{
		if($row1['hak']=="1"){
			echo "<script>alert('Selamat Datang Guru!');location.replace('halaman/guru/index.php');</script>";	
			session_destroy();

		}
		if($row1['hak']=="2"){
			echo "<script>alert('Silahkan Akses Menggunakan Aplikasi!');location.replace('index.php');</script>";	
			session_destroy();
		}
		if($row1['hak']=="0"){
			$_SESSION['hak']=$row1['hak'];
			$_SESSION['id_user']=$row1['id_user'];
			$result1 = mysqli_query($connect,"SELECT users.*,data_siswa.* FROM users INNER JOIN data_siswa ON data_siswa.id_user = users.id_user WHERE users.username ='$username'");
			$row = mysqli_fetch_array($result1);
			echo "<script>alert('Selamat Datang Admin !');location.replace('halaman/admin/index.php');</script>";	
		}
	}
}

?>