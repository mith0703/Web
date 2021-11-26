<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "diamond";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}

$connectionDB = false;
?>
