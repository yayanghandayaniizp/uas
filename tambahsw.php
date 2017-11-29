<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$name = $_POST['name'];
	$desg = $_POST['desg'];
	$sal = $_POST['salary'];

	$sql = "INSERT INTO siswaaa (id,Nama,Kelas,NoHP,Alamat,Citacita) VALUES ('$name','$desg','$sal')";

	require_once('koneksi.php');

	if(mysqli_query($con,$sql)){
		echo 'Berhasil Menambahkan Siswa';
	}else{
		echo 'Gagal Menambahkan Siswa';
	}
	mysqli_close($con);
	}
?>