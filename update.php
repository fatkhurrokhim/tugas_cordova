<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];    
 $nama=$_POST['nama'];
 $nomorhp=$_POST['nomorhp'];
 $alamat=$_POST['alamat'];

 $q=mysqli_query($con,"UPDATE `tbl_datasantri` SET `nama`='$nama',`nomorhp`='$nomorhp',`alamat`='$alamat' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>