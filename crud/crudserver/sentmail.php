<?php
$to = "mr.riioo.pn@gmail.com";
$subject = "Test";
$txt = "Hello world!";
$headers = "From: fakhrezaa@gmail.com" . "\r\n" .
"CC: fakhrezaa@gmail.com";

mail($to,$subject,$txt,$headers);
?>