<?php

include "../../config.php";

if(isset($_POST['search'])){
 $search = $_POST['search'];

 $query = "SELECT * FROM data_siswa WHERE nama like'%".$search."%'";
 $result = mysqli_query($connect,$query);

 $response = array();
 while($row = mysqli_fetch_array($result) ){
   $response[] = array("value"=>$row['nama'],"label"=>$row['nama'],"label1"=>$row['id_siswa']);
 }

 echo json_encode($response);
}

exit;