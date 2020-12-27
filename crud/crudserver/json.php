<?php
include "db.php";
$data=array();
$cluster = $_GET['cluster'];
$q=mysqli_query($con,"select * from `data_web` WHERE cluster = 'bogor'");
while ($row=mysqli_fetch_assoc($q)){
 $data[]=$row;
}
echo json_encode($data);
?>