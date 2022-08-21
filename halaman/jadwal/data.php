<?php
include "../../config.php";
$query=mysqli_query($connect,"SELECT @rownum := @rownum + 1 AS urutan,t.* FROM data_jadwal t , 
	(SELECT @rownum := 0) r");
$data = array();
while($r = mysqli_fetch_assoc($query)) {
	$data[] = $r;
}
$i=0;
foreach ($data as $key) {
		// add new button
	$data[$i]['button'] = '<button type="submit" id_jadwal="'.$data[$i]['id_jadwal'].'" class="btn btn-primary btnedit" ><i class="fa fa-edit"></i></button> 
							   <button type="submit"  id_jadwal="'.$data[$i]['id_jadwal'].'" ulanganke="'.$data[$i]['ulanganke'].'" class="btn btn-primary btnhapus" ><i class="fa fa-times"></i></button>';
	$i++;
}
$datax = array('data' => $data);
echo json_encode($datax);
?>