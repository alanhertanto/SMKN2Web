<?php
include "../../config.php";
$id_pelajaran = $_POST['id_pelajaran'];
$nama_materi = $_POST['nama'];
$pdf = $_POST['pdf'];

$crud=$_POST['crud'];

if($crud=='N'){
	$res = mysqli_query($connect,"insert into data_pelajaran(id_pelajaran,pdf,nama_materi) values(NULL,'$pdf','$nama_materi')");
	if(mysqli_error($connect)){
		$result['error']=mysqli_error($connect);
		$result['result']=0;
	}else{
		$result['error']='';
		$result['result']=1;
	}
}else if($crud == 'E'){
		$res = mysqli_query($connect,"update data_pelajaran set pdf='$pdf', nama_materi='$nama_materi' where id_pelajaran='$id_pelajaran'");
		if(mysqli_error($connect)){
			$result['error']=mysqli_error($connect);
			$result['result']=0;
		}else{
			$result['error']='';
			$result['result']=1;
		}
}else{
	$result['error']='Invalid Order';
	$result['result']=0;
}
$result['crud']=$crud;
echo json_encode($result);
?>