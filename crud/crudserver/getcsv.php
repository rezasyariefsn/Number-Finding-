<?php
$csv = $_GET['csv'];
if (($handle = fopen("files/".$csv."", 'r')) === false) {
    die('Error opening file');
}

$headers = fgetcsv($handle, 1024, ',');
$complete = array();

while ($row = fgetcsv($handle, 1024, ',')) {
    $complete[] = array_combine($headers, $row);
}

fclose($handle);

echo json_encode($complete);
?>