<?php
$string=$_GET['str'];
$res1=md5($string);
$res2=sha1($string);
$data=array("md5"=>$res1,"sha1"=>$res2);
echo json_encode($data);
?>