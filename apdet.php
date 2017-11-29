<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	$id = $_POST['id'];
	$Nama = $_POST['nama'];
	$Kelas = $_POST['kls'];
	$Nohp = $_POST['no'];
	$Alamat = $_POST['al'];
	$Citacita = $_POST['cit'];

	require_once('koneksi.php');

$sql = "UPDATE siswaaa SET id = '$id', Nama = '$nama', Kelas = '$kls', Nohp = '$no', Alamat = '$al', Citacita = '$cit' WHERE id = $id;";

	if(mysqli_query($con,$sql)){
		echo 'Berhasil Update Data Siswa';
	}else{
		echo 'Gagal Update Data Siswa';
	}
	mysqli_close($con);
}
?>