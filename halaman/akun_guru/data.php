<?php
include "../../config.php";
session_start();
$query=mysqli_query($connect,"SELECT *	FROM users WHERE hak=1");
$data = array();
$i= 0;
while($r = mysqli_fetch_array($query)) {
	$data[] = $r;
}
$x=1;
foreach ($data as $key) {
		// add new button
	$data[$i]['urutan'] = $x;
	$data[$i]['button'] = '<button type="submit" class="btn btn-primary btnedit" ><i class="fa fa-edit"></i></button> ';

	$i++;
	$x++;
}


$datax = array('data' => $data);
echo json_encode($datax);
?>