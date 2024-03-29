<?php
$dbuser="root";
$dbname="crudphp";
$hostname="localhost";
$dbpass="R0hit@51471";

$conn=new mysqli($hostname,$dbuser,$dbpass,$dbname);
echo "<pre>";
print_r($conn);




?>