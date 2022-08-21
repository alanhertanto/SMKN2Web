<?php
include('../config.php');



for($i=0; $i<100; $i++){
	$jawaban = rand(1,4);
	switch ($jawaban) {
		case 1:
			$jawabannya = "A";
			break;
		case 2:
			$jawabannya = "B";
			break;
		case 3:
			$jawabannya = "C";
			break;
		case 4:
			$jawabannya = "D";
			break;
		}
	$result = mysqli_query($connect,"INSERT INTO data_soal (id_guru,soal,pilihanA,pilihanB,pilihanC,pilihanD,jawaban,ulanganke,jenis_ujian) VALUES (1,'Soal Test.$i','Test 1','Test2','Test3','Test4','$jawabannya',1,'Ulangan')");
}


?>