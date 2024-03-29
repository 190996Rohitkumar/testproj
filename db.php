<?php
$dbuser="root";
$dbname="phpcrud";
$hostname="localhost";
$dbpass="";
try{
    $conn=new mysqli($hostname,$dbuser,$dbpass,$dbname);
    print_r($conn);
}catch(Exception $e){
    echo $e->getMessage();
}

echo "db";





?>