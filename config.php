<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "rathnayaka_gyms";

$link = mysqli_connect($host, $user, $password, $dbname);
//Checks the Connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
