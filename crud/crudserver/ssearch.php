<?php
include "db.php";
$data=array();
//$cluster = $_GET['cluster'];
$msid = $_GET['msidn'];
$clustr = $_GET['clustr'];
$q=mysqli_query($con,"select * from `datas` WHERE msidn = $msid");
if (mysqli_num_rows($q) != 0){
	while ($row=mysqli_fetch_assoc($q)){
 $data[]=$row;
}
echo json_encode($data);
} else {
	$kosong = array();
	$kosong = '[{"id":"empty","cluster":"'.$clustr.'","msidn":"'.$msid.'","content_id":"empty","rev":"empty","aktif_paket":"empty"}]';
	echo $kosong;
}
?>