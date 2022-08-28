<?php

include "../../config.php";

if(isset($_POST['search'])){
 $search = $_POST['search'];

 $query = "SELECT * FROM data_siswa WHERE nama_materi like'%".$search."%'";
 $result = mysqli_query($connect,$query);

 $response = array();
 while($row = mysqli_fetch_array($result) ){
   $response[] = array("value"=>$row['nama_materi'],"label"=>$row['nama_materi'],"label1"=>$row['id_pelajaran']);
 }

 echo json_encode($response);
}

exit;