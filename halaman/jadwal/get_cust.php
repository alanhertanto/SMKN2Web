<?php
include "../../config.php";

$id_jadwal=$_POST['id_jadwal'];
$query=mysqli_query($connect,"SELECT t.* FROM data_jadwal t where t.id_jadwal='$id_jadwal'");
$array = array();
while($data = mysqli_fetch_array($query)){
        $array['id_jadwal']=$data['id_jadwal'];
        $array['mulai']=date('Y-m-d\TH:i',strtotime($data['starting_time']));
        $array['selesai']=date('Y-m-d\TH:i',strtotime($data['end_time']));
        $array['ulanganke']=$data['ulanganke'];
}
echo json_encode($array);

?>