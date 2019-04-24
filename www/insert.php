<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama_lk=$_POST['nama_lk'];
 $nim=$_POST['nim'];
 $nama_anggota=$_POST['nama_anggota'];
 $q=mysqli_query($con,"INSERT INTO `data` (`nama_lk`,`nim`,`nama_anggota`) VALUES ('$nama_lk','$nim','$nama_anggota')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
