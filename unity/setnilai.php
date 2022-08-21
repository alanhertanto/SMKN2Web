<?php
include('../config.php');
$id_siswa = $_POST["id_siswa"];
$nilai = $_POST['nilai'];
$ulanganke = $_POST['ulanganke'];
$result = mysqli_query($connect,"INSERT INTO `data_nilai` (id_nilai,id_siswa,nilai,ulanganke) VALUES(null,$id_siswa,'$nilai','$ulanganke')");
if($result){
	echo "Ssukses";
}else{
		echo "INSERT INTO `data_soal` (id_nilai,id_siswa,nilai,ulanganke) VALUES(null,$id_siswa,'$nilai','$ulanganke')";
}
?>