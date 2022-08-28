<?php
include "../../config.php";
session_start();
$id_siswa=$_POST['id_siswa'];
$query=mysqli_query($connect,"select * from data_siswa where id_siswa=$id_siswa");
$array = array();
while($data = mysqli_fetch_array($query)){
	$array['id_siswa'] = $data['id_siswa'];
	$array['nisn'] = $data['nisn'];
	$array['kelas'] = $data['kelas'];
	$array['nama'] = $data['nama'];
	$array['alamat'] = $data['alamat'];
	$array['jk'] = $data['jk'];
	$array['tanggal_lahir'] = $data['tanggal_lahir'];
	$array['tempat_lahir'] = $data['tempat_lahir']; 
	$array['foto'] = $data['foto'];
	$array['id_user'] = $data['id_user'];
}
echo json_encode($array);

?>