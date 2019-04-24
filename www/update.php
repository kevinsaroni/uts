<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama_lk=$_POST['nama_lk'];
 $nim=$_POST['nim'];
 $nama_anggota=$_POST['nama_anggota'];
 $q=mysqli_query($con,"UPDATE `data` SET `nama_lk`='$nama_lk',`nim`='$nim',`nama_anggota`='$nama_anggota' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
