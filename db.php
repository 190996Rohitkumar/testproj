<?php
$dbuser="root";
$dbname="phpcrud";
$hostname="localhost";
$dbpass="R0hit@51471";
try{
    $conn=new mysqli($hostname,$dbuser,$dbpass,$dbname);
    print_r($conn);
}catch(Exception $e){
    echo $e->getMessage();
}

echo "db";





?>