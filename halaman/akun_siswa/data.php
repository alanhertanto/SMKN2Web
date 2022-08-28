<?php
include "../../config.php";
session_start();
$query=mysqli_query($connect,"SELECT t.*,y.*
	FROM users t INNER JOIN data_siswa y ON t.id_user = y.id_user");
$data = array();
$i= 0;
while($r = mysqli_fetch_array($query)) {
	$data[] = $r;
}
$x=1;
foreach ($data as $key) {
		// add new button
	$data[$i]['urutan'] = $x;
	$data[$i]['button'] = '<button type="submit" id_siswa="'.$data[$i]['id_siswa'].'" class="btn btn-primary btnedit" ><i class="fa fa-edit"></i></button> 
							   <button type="submit" id_siswa="'.$data[$i]['id_siswa'].'" nama="'.$data[$i]['nama'].'" class="btn btn-primary btnhapus" ><i class="fa fa-remove"></i></button>';

	$i++;
	$x++;
}


$datax = array('data' => $data);
echo json_encode($datax);
?>