<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $destination=$_POST['destination'];
 $start=$_POST['start'];
 $end=$_POST['end'];
 $price=$_POST['price'];
 $q=mysqli_query($con,"INSERT INTO `booking` (`user_phone`,`user_email`,`destination`,`start_date`,`end_date`,`price`) VALUES ('$phone','$email','$destination','$start','$end','$price')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>