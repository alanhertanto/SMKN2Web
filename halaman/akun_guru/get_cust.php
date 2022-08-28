<?php
include "../../config.php";
session_start();
$query=mysqli_query($connect,"select * from users where hak=1");
$array = array();
while($data = mysqli_fetch_array($query)){
	$array['username'] = $data['username'];
	$array['password'] = $data['password'];
}
echo json_encode($array);

?>