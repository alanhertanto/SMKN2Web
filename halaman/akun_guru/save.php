<?php
include "../../config.php";

$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);
$crud = $_POST['crud'];
if($crud == 'E'){
 	$result = mysqli_query($connect,"update users set password='$password',username='$username' WHERE hak=1");
	if(!$result){
		$results['error']='Gagal!';
		$results['results']='0';
	}else{
		$results['error']='';
		$results['results']='1';	
	}
}else{
	$results['error']='Gagal!';
	$results['results']='0';
}
echo json_encode($results);

?>