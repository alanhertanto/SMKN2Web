<?php
include "../../config.php";
session_start();
$id_soal=$_POST['id_soal'];
$query=mysqli_query($connect,"select * from data_soal where id_soal=$id_soal");
$array = array();
while($data = mysqli_fetch_array($query)){
	$array['id_soal'] = $data['id_soal'];
	$array['soal'] = $data['soal'];
	$array['pilihana'] = $data['pilihanA'];
	$array['pilihanb'] = $data['pilihanB'];
	$array['pilihanc'] = $data['pilihanC'];
	$array['pilihand'] = $data['pilihanD'];
	$array['jawaban'] = $data['jawaban'];
	$array['ulanganke'] = $data['ulanganke']; 
	$array['jenisujian'] = $data['jenis_ujian'];
}
echo json_encode($array);

?>