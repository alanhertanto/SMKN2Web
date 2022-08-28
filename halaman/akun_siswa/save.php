<?php
include "../../config.php";

$id_siswa=$_POST['id_siswa'];
$nisn = $_POST['nisn'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$kelas=$_POST['kelas'];
$jk=$_POST['jk'];
$tempat=$_POST['tempat'];
$tgl=$_POST['tgl'];
$crud=$_POST['crud'];
$username = $nisn;
$password = md5($nisn);
$result1 = mysqli_query($connect,"SELECT * FROM users ORDER BY id_user DESC LIMIT 1");
$row = mysqli_fetch_array($result1);
$id_user = $row['id_user']+1;



if($crud=='N'){
	$result = mysqli_query($connect,"insert into data_siswa(id_siswa,id_user,nisn,nama,alamat,jk,kelas,tanggal_lahir,tempat_lahir,foto) values(null,'$id_user','$nisn','$nama','$alamat','$jk','$kelas','$tgl','$tempat','".$_FILES["file"]["name"]."')");
	mysqli_query($connect,"INSERT INTO users (id_user,username,password,hak) VALUES ('id_user','$nisn','$password','2')");
	move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/img/siswa/" . $_FILES["file"]["name"]);
	if(!$result){
		$result['error']='Gagal!';
		$result['result']='0';
	}else{
		$result['error']='';
		$result['result']='1';
	}
}else if($crud == 'E'){
		if(!empty($_FILES['file'])){
		 	$result = mysqli_query($connect,"update data_siswa set nama='$nama',alamat='$alamat',kelas='$kelas',jk='$jk',tempat_lahir='$tempat',tanggal_lahir='$tgl',foto='".$_FILES["file"]["name"]."' WHERE id_siswa='$id_siswa'");			
			move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/img/siswa/" . $_FILES["file"]["name"]);
			if(!$result){
				$result['error']='Gagal!';
				$result['result']='0';
			}else{
				$result['error']='';
				$result['result']='1';
			}
		}else{
		 	$result = mysqli_query($connect,"update siswa set nama='$nama',alamat='$alamat',kelas='$kelas',jk='$jk',tempat='$tempat',tgl='$tgl',no_hp='$no_hp' WHERE id_siswa='$id_siswa'");
			if(!$result){
				$result['error']='Gagal!';
				$result['result']='0';
			}else{
				$result['error']='';
				$result['result']='1';
			}
		}
}else{
	$result['error']='Gagal!';
	$result['result']='0';
}
$result['crud']=$crud;
echo json_encode($result);

?>