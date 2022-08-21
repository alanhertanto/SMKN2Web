<?php
include('../config.php');
$ulanganke = $_POST['ulanganke'];
$result = mysqli_query($connect,"SELECT * FROM `data_soal` WHERE ulanganke='$ulanganke'");
while($row = mysqli_fetch_array($result)){
	$data['soal'][] = $row['soal'];
	$data['pilihanA'][] = $row['pilihanA'];
	$data['pilihanB'][] = $row['pilihanB'];
	$data['pilihanC'][] = $row['pilihanC'];
	$data['pilihanD'][] = $row['pilihanD'];
	$data['jawaban'][] = $row['jawaban'];
	$data['ulanganke'][] = $row['ulanganke'];
}
	echo json_encode($data);

?>