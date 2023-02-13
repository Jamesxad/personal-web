<?php
include "db.php";

if(isset($_POST["name"]) &&
isset($_POST["email"]) && 
isset($_POST["comment"])){

$name = "";
$email =  "";
$comment =  "";
$alert="";
$error="";


$s = " INSERT INTO inquiry (name, email, comment)" . 
   "VALUES ('$name', '$email' ,'$comment')" ;

   $check = $con->query($s);


   

if(!$check){
    echo
   $alert = 'Failed to send';
   
   
}else{
    echo
   $alert = 'Thank you for inquiry!';

   
}

   }

?>

