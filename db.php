<?php
$dbuser="root";
$dbname="crudphp";
$hostname="8.0.36-0ubuntu0.22.04.1";
$dbpass="R0hit@85390";

$conn=new mysqli($hostname,$dbuser,$dbpass,$dbname);
echo "<pre>";
print_r($conn);




?>