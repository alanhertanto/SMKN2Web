<?php
include "../../config.php";
$id_jadwal = $_POST['id_jadwal'];
$ujianke = $_POST['ulanganke'];
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];

$crud=$_POST['crud'];

if($crud=='N'){
	$res = mysqli_query($connect,"insert into data_jadwal(id_jadwal,starting_time,end_time,ulanganke) values(NULL,'$mulai','$selesai','$ujianke')");
	if(mysqli_error($connect)){
		$result['error']=mysqli_error($connect);
		$result['result']=0;
	}else{
		$result['error']='';
		$result['result']=1;
	}
}else if($crud == 'E'){
		$res = mysqli_query($connect,"update data_jadwal set starting_time='$mulai',end_time='$selesai', ulanganke='$ujianke' where id_jadwal='$id_jadwal'");
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