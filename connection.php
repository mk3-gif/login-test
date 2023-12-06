<?php
$hostname="localhost";
$dbuser="root";
$dbpassword="";
$dbname="register";
$conn=mysqli_connect($hostname,$dbuser,$dbpassword,$dbname);
if(!$conn){
    die("Something went wrong:");
}
?>