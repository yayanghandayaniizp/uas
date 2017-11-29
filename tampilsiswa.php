<?php

$id = $_GET['id'];

require_once('koneksi.php');

$sql = "SELECT * FROM siswaaa WHERE id=$id";

$r = mysqli_query($con,$sql);

$result = array();
$row = mysqli_fetch_array($r);
array_push($result,array(
			"id"=>$row['id'],
			"Nama"=>$row['Nama'],
			"Kelas"=>$row['Kelas'],
			"Nohp"=>$row['NoHP'],
			"Alamat"=>$row['Alamat'],
			"Citacita"=>$row['Citacita'],
			));

			echo json_encode(array('result'=>$result));
			mysqli_close($con);
?>