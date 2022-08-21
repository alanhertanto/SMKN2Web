<?php
include "../../config.php";
$id_penduduk = $_POST['id_penduduk'];
$nik = $_POST['nik'];
$alamat_usaha = $_POST['alamat_usaha'];
$no_kk = $_POST['kk'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$penghasilan = $_POST['penghasilan'];
$pengeluaran = $_POST['pengeluaran']; 
$tanggungan = $_POST['tanggungan'];
$surat_rekomendasi = $_POST['surat_rekomendasi']; 
$kelayakan_huni = $_POST['kelayakan_hunian']; 
$crud = $_POST['crud'];
if($crud == 'E'){
	$resultx = mysqli_query($connect,"UPDATE `data_penduduk` SET `no_kk`='$no_kk',`alamat_usaha`='$alamat_usaha',`nik`='$nik',`alamat`='$alamat',`nama`='$nama',`penghasilan`='$penghasilan',`pengeluaran`='$pengeluaran',`tanggungan`='$tanggungan',`kelayakan_huni`='$kelayakan_huni',`surat_rekomendasi`='$surat_rekomendasi' WHERE id_penduduk=$id_penduduk");
	if(!$resultx){
		$result['error']='';
		$result['result']=0;
	}else{
		$result['error']='';
		$result['result']=1;
	}
}else{

	$result['error']='Salah Urutan!';
	$result['result']=0;
}
$result['crud']=$crud;
echo json_encode($result);

?>