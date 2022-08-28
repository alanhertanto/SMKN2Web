<?php
include "../../config.php";

$nisn = $_POST['nisn'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$kelas=$_POST['kelas'];
$jk=$_POST['jk'];
$tempat=$_POST['tempat'];
$tgl=$_POST['tgl'];
$username = $nisn;
$password = md5($nisn);
$result1 = mysqli_query($connect,"SELECT * FROM users ORDER BY id_user DESC LIMIT 1");
$row = mysqli_fetch_array($result1);
$id_user = $row['id_user']+1;
$result = mysqli_query($connect,"insert into data_siswa(id_siswa,id_user,nisn,nama,alamat,jk,kelas,tanggal_lahir,tempat_lahir,foto) values(null,'$id_user','$nisn','$nama','$alamat','$jk','$kelas','$tgl','$tempat','".$_FILES["file"]["name"]."')");
	mysqli_query($connect,"INSERT INTO users (id_user,username,password,hak) VALUES ('id_user','$nisn','$password','2')");
	move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/img/siswa/" . $_FILES["file"]["name"]);
	if(!$result){
		echo "<script>alert('Pendaftaran Gagal!');location.replace('daftar.php');</script>";
	}else{
		echo "<script>alert('Pendaftaran Berhasil, silahkan Login Menggunakan Aplikasi!');location.replace('../../index.php');</script>";
	}
?>