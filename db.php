<?php
$server ="localhost";
$user ="james";
$password ="james";
$database ="aboutme";

$con = new mysqli($server, $user, $password, $database);

if(!$con){
    die("Connection failed" . mysqli_connect_error());
}

?>
