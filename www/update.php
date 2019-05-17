<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama_lengkap=$_POST['nama_lengkap'];
 $NIK=$_POST['NIK'];
 $jenis_kelamin=$_POST['jenis_kelamin'];
 $TTL=$_POST['TTL'];
 $agama=$_POST['agama'];
 $pekerjaan=$_POST['pekerjaan'];
 $q=mysqli_query($con,"UPDATE `data` SET `nama_lengkap`='$nama_lengkap',`NIK`='$NIK',`jenis_kelamin`='$jenis_kelamin',`TTL`='$TTL',`agama`='$agama',`pekerjaan`='$pekerjaan' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
