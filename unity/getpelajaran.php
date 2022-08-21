<?php
include('../config.php');
$result = mysqli_query($connect,"SELECT * FROM `data_pelajaran`");
while($row = mysqli_fetch_array($result)){
	$data['id_pelajaran'][] = $row['id_pelajaran'];
	$data['judul_pelajaran'][] = $row['nama_materi'];
}
	echo json_encode($data);

?>