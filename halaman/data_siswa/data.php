<?php
include "../../config.php";
session_start();
$query=mysqli_query($connect,"SELECT @rownum := @rownum + 1 AS urutan,t.*
	FROM data_penduduk t, 
	(SELECT @rownum := 0) r");
$data = array();
while($r = mysqli_fetch_array($query)) {
	$data[] = $r;
}
$x=1;
$i=0;
foreach ($data as $key) {
		// add new button
	$data[$i]['button'] = '<button type="submit" id_penduduk="'.$data[$i]['id_penduduk'].'" class="btn btn-primary btnedit" ><i class="fa fa-edit"></i></button> 
							   <button type="submit" id_penduduk="'.$data[$i]['id_penduduk'].'" nama="'.$data[$i]['nama'].'" class="btn btn-primary btnhapus" ><i class="fa fa-remove"></i></button>';
	$i++;
	$x++;
}
$datax = array('data' => $data);
echo json_encode($datax);
?>