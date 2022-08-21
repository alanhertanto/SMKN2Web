<?php
error_reporting(E_ALL & ~E_NOTICE);

include("../config.php");
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);
$result = mysqli_query($connect,"SELECT * FROM users WHERE username='$username'");
$result2 = mysqli_query($connect,"SELECT * FROM users WHERE username='$username' AND password='$password'");
$numrows = mysqli_num_rows($result);
$numrows2 = mysqli_num_rows($result2);
$row1 = mysqli_fetch_array($result2);
if($numrows==0){
	echo "Username Tidak Ada";	
}else{
	if($numrows2==0){
	 	echo "Salah Password atau Username";	
	}else{
			$result1 = mysqli_query($connect,"SELECT users.*,data_siswa.* FROM users INNER JOIN data_siswa ON data_siswa.id_user = users.id_user WHERE users.username ='$username'");
			$row = mysqli_fetch_array($result1);
			$_SESSION['hak']=$row['hak'];
			$_SESSION['id_user']=$row['id_user'];
			$_SESSION['nama']=$row['nama'];
			$ardata = array($row['nama'],$row['hak']);
			$medata = array("Ok",200);
			$arrays = array("nama"=>$row['nama'],"hak"=>$row['hak'],"message"=>"Ok","code"=>200,"id_siswa"=>$row['id_siswa']);
			echo json_encode($arrays);
	}
}

?>