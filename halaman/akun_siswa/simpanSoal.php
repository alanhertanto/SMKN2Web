<?php
include "../../config.php";

$id_soal=$_POST['id_soal'];
$soal=$_POST['soal'];
$jawaban=$_POST['jawaban'];
$jenis=$_POST['jenis'];
$pilihanA=$_POST['pilihanA'];
$pilihanB=$_POST['pilihanB'];
$pilihanC=$_POST['pilihanC'];
$pilihanD=$_POST['pilihanD'];
$crud=$_POST['crud'];


if($crud=='N'){
	$result = mysqli_query($connect,"insert into soal(id_soal,soal,jawaban,pilihanA,jenis,pilihanB,pilihanC,pilihanD,foto) values('$id_soal','$soal','$jawaban','$pilihanA','$jenis','$pilihanB','$pilihanC','$pilihanD','".$_FILES["file"]["name"]."')");
	move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/img/soal/" . $_FILES["file"]["name"]);
	if(!$result){
		$result['error']='Gagal!';
		$result['result']=0;
	}else{
		$result['error']='';
		$result['result']=1;
	}
}else if($crud == 'E'){
		if(!empty($_FILES['file'])){
		 	$result = mysqli_query($connect,"update soal set soal='$soal',jawaban='$jawaban',jenis='$jenis',pilihanA='$pilihanA',pilihanB='$pilihanB',pilihanC='$pilihanC',pilihanD='$pilihanD',foto='".$_FILES["file"]["name"]."' WHERE id_soal='$id_soal'");			
			move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/img/soal/" . $_FILES["file"]["name"]);
			if(!$result){
				$result['error']='Gagal!';
				$result['result']=0;
			}else{
				$result['error']='';
				$result['result']=1;
			}
		}else{
		 	$result = mysqli_query($connect,"update soal set soal='$soal',jawaban='$jawaban',jenis='$jenis',pilihanA='$pilihanA',pilihanB='$pilihanB',pilihanC='$pilihanC',pilihanD='$pilihanD' WHERE id_soal='$id_soal'");
			if(!$result){
				$result['error']='Gagal!';
				$result['result']=0;
			}else{
				$result['error']='';
				$result['result']=1;
			}
		}
}else{
	$result['error']='Gagal!';
	$result['result']=0;
}
$result['crud']=$crud;
echo json_encode($result);

?>