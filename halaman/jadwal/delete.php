<?php
include "../../config.php";

$id_jadwal = $_POST['id_jadwal'];
$res = mysqli_query($connect,"delete from data_jadwal where id_jadwal='$id_jadwal'");
if(mysqli_error($res)){
	$result['error']=mysqli_error($res);
	$result['result']=0;
}else{
	$result['error']='';
	$result['result']=1;
}
echo json_encode($result);
?>