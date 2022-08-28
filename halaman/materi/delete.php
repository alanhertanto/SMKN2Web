<?php
include "../../config.php";

$id_pelajaran = $_POST['id_pelajaran'];

mysqli_query($connect,"delete from data_pelajaran where id_pelajaran=$id_pelajaran");
if(!$result){
	$result['error']='Gagal!';
	$result['result']=0;
}else{
	$result['error']='';
	$result['result']=1;
}
echo json_encode($result);

?>