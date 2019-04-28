<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $nomorhp=$_POST['nomorhp'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"INSERT INTO `tbl_datasantri` (`nama`,`nomorhp`,`alamat`) VALUES ('$nama','$nomorhp','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>