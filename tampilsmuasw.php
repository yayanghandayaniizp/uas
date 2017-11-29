<?php

require_once('koneksi.php');

$sql = "SELECT * FROM siswaaa";

$r = mysqli_query($con,$sql);

$result = array();

while($row = mysqli_fetch_array($r)){
	
		array_push($result,array(
			
			"id"=>$row['id'],
			"Nama"=>$row['Nama'],
			"Kelas"=>$row['Kelas'],
			"NoHP"=>$row['NoHP'],
			"Alamat"=>$row['Alamat'],
			"Citacita"=>$row['Citacita'],
			));
}

echo json_encode(array('result'=>$result));
mysqli_close($con);
?>