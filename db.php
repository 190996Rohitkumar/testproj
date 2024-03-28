<?php
$dbuser="";
$dbname="";
$hostname="";
$dbpass;

$conn=new mysqli($hostname,$dbuser,$dbpass,$dbname);
echo "<pre>";
print_r($conn);




?>