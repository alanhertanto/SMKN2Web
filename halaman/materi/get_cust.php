<?php
include "../../config.php";
session_start();
$id_pelajaran=$_POST['id_pelajaran'];
$query=mysqli_query($connect,"select * from data_pelajaran where id_pelajaran=$id_pelajaran");
$array = array();
while($data = mysqli_fetch_array($query)){
	$array['id_pelajaran'] = $data['id_pelajaran'];
	$array['nama_materi'] = $data['nama_materi'];
	$array['pdf'] = $data['pdf'];
}
echo json_encode($array);

?>