<?php
include "../../config.php";
session_start();
$id_penduduk=$_POST['id_penduduk'];
$query=mysqli_query($connect,"select * from data_penduduk where id_penduduk=$id_penduduk");
$array = array();
while($data = mysqli_fetch_array($query)){
	$array['id_penduduk'] = $data['id_penduduk'];
	$array['nik'] = $data['nik'];
	$array['no_kk'] = $data['no_kk'];
	$array['nama'] = $data['nama'];
	$array['alamat'] = $data['alamat'];
	$array['alamat_usaha'] = $data['alamat_usaha'];
	$array['penghasilan'] = $data['penghasilan'];
	$array['pengeluaran'] = $data['pengeluaran']; 
	$array['tanggungan'] = $data['tanggungan'];
	$array['kelayakan_huni'] = $data['kelayakan_huni'];
	$array['surat_rekomendasi'] = $data['surat_rekomendasi'];
}
echo json_encode($array);

?>