<?php
include "../../config.php";

$id_soal = $_POST['id_soal'];
$res = mysqli_query($connect,"delete from data_soal where id_soal='$id_soal'");
if(mysqli_error($res)){
	$result['error']=mysqli_error($res);
	$result['result']=0;
}else{
	$result['error']='';
	$result['result']=1;
}
echo json_encode($result);
?>