<?php 

$host="localhost";
$user="root";
$pass="";
$db_name="registrationform";

$con= mysqli_connect($host,$user,$pass,$db_name);

if(! $con)
{
    die("error to connect with database".mysqli_error());
}

?>
