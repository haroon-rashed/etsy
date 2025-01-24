<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "etsy";

$base_url = "http://localhost:3000";


$connect = mysqli_connect($hostname, $username, $password, $database) or die();
?>