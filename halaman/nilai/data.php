<?php
include "../../config.php";
session_start();
$query=mysqli_query($connect,"SELECT t.*,y.*
	FROM data_nilai t INNER JOIN data_siswa y ON t.id_siswa = y.id_siswa");
$data = array();
$x= 1;
while($r = mysqli_fetch_array($query)) {
	$data[] = $r;
}

$i=0;
foreach ($data as $key) {
		// add new button
	$data[$i]['urutan'] = $x;
	$i++;
	$x++;
}
$datax = array('data' => $data);
echo json_encode($datax);
?>