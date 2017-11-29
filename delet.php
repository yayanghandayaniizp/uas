<?php 

 $id = $_GET['id'];
 
 require_once('koneksi.php');
 
 $sql = "DELETE FROM siswaaa WHERE id=$id;";

 
 //Menghapus Nilai pada Database 
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menghapus Siswa';
 }else{
 echo 'Gagal Menghapus Siswa';
 }
 
 mysqli_close($con);
 ?>