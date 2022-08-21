<?php
include('../config.php');
$result = mysqli_query($connect,"SELECT * FROM `data_jadwal`");
while($row = mysqli_fetch_array($result)){
	$data['starting_time'] = $row['starting_time'];
	$data['end_time'] = $row['end_time'];
	$data['ulanganke'] = $row['ulanganke'];
}
	echo json_encode($data);

?>