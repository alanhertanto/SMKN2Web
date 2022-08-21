<?php
include "../../config.php";
$id_soal = $_POST['id_soal'];
$ulanganke = $_POST['ulanganke'];
$soal = $_POST['soal'];
$pilihanA = $_POST['pilihana'];
$pilihanB = $_POST['pilihanb'];
$pilihanC = $_POST['pilihanc'];
$pilihanD = $_POST['pilihand'];
$jawaban = $_POST['jawaban'];
$jenis = $_POST['jenisujian'];

$crud=$_POST['crud'];

if($crud=='N'){
	$res = mysqli_query($connect,"insert into data_soal(id_soal,soal,pilihanA,pilihanB,pilihanC,pilihanD,jawaban,jenis_ujian,ulanganke) values(NULL,'$soal','$pilihanA','$pilihanB','$pilihanC','$pilihanD','$jawaban','$jenis','$ulanganke')");
	if(mysqli_error($connect)){
		$result['error']=mysqli_error($connect);
		$result['result']=0;
	}else{
		$result['error']='';
		$result['result']=1;
	}
}else if($crud == 'E'){
		$res = mysqli_query($connect,"update data_soal set soal='$soal',pilihanA='$pilihanA',pilihanB='$pilihanB',pilihanC='$pilihanC',pilihanD='$pilihanD',jawaban='$jawaban',jenis_ujian='$jenis', ulanganke='$ulanganke' where id_soal='$id_soal'");
		if(mysqli_error($connect)){
			$result['error']=mysqli_error($connect);
			$result['result']=0;
		}else{
			$result['error']='';
			$result['result']=1;
		}
}else{
	$result['error']='Invalid Order';
	$result['result']=0;
}
$result['crud']=$crud;
echo json_encode($result);
?>