<?php
include "../../config.php";

$id_soal=$_POST['id_soal'];
$query=mysqli_query($connect,"SELECT t.* FROM data_soal t where t.id_soal='$id_soal'");
$array = array();
while($data = mysqli_fetch_array($query)){
        $array['id_soal']=$data['id_soal'];
        $array['ulanganke']=$data['ulanganke'];
        $array['soal']=$data['soal'];
        $array['pilihana']=$data['pilihanA'];
        $array['pilihanb']=$data['pilihanB'];
        $array['pilihanc']=$data['pilihanC'];
        $array['pilihand']=$data['pilihanD'];
        $array['jawaban']=$data['jawaban'];
        $array['jenisujian']=$data['jenis_ujian'];
}
echo json_encode($array);

?>