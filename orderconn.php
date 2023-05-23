<?php
$hostname='localhost';
$username='root';
$password='';
$database='ordersdb';

$conec=mysqli_connect($hostname,$username,$password,$database);
if(!$conec){
    die (mysqli_error($conn));
}
?>