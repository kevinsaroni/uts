<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama_lengkap=$_POST['nama_lengkap'];
 $NIK=$_POST['NIK'];
 $jenis_kelamin=$_POST['jenis_kelamin'];
 $TTL=$_POST['TTL'];
 $agama=$_POST['agama'];
 $pekerjaan=$_POST['pekerjaan'];
 $q=mysqli_query($con,"INSERT INTO `data` (`nama_lengkap`,`NIK`,`jenis_kelamin`,`TTL`,`agama`,`pekerjaan`) VALUES ('$nama_lengkap','$NIK','$jenis_kelamin','$TTL','$agama','$pekerjaan')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
