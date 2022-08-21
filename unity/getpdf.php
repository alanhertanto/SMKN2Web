<?php
include('../config.php');
$id_pelajaran = $_POST['id_pdf'];
$result = mysqli_query($connect,"SELECT * FROM `data_pelajaran` WHERE id_pelajaran='$id_pelajaran'");
while($row = mysqli_fetch_array($result)){
	$pdf_url = $row['pdf'];
}
	echo $pdf_url;

?>