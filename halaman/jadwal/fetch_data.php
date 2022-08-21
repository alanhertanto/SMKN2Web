<?php

include "../../config.php";

if(isset($_POST['search'])){
 $search = $_POST['search'];

 $query = "SELECT * FROM data_jadwal WHERE ujianke like'%".$search."%'";
 $result = mysqli_query($connect,$query);

 $response = array();
 while($row = mysqli_fetch_array($result) ){
   $response[] = array("value"=>$row['ujianke'],"label"=>$row['ujianke'],"label1"=>$row['id_ujian']);
 }

 echo json_encode($response);
}

exit;