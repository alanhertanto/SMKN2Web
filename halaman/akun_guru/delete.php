<?php
include "../../config.php";

$id_penduduk = $_POST['id_penduduk'];

mysql_query("delete from data_penduduk where id_penduduk=$id_penduduk");
if(mysql_error()){
	$result['error']=mysql_error();
	$result['result']=0;
}else{
	$result['error']='';
	$result['result']=1;
}
echo json_encode($result);

?>