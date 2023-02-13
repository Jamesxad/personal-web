<?php
include "db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<?php


 if (isset($_POST["pass"])){

$pass =  "";
$errorMessage = "";
$success = "";
$alert="";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pass = $_POST["pass"];


    if ( empty($pass) ) {
    $errorMessage = "Please type your Password!";


    }else{


$s = " SELECT * FROM admin where password = '$pass'";

$check = mysqli_query($con, $s);
$checkres = mysqli_num_rows($check);

    

if($checkres >=1){
    echo '<script>alert("WelcomeAdmin!")</script>';
    header("location: viewcom.php");
        exit;
}else{
    $alert = 'Wrong Password!';
}

    }
}
 }
 
 ?>
    

    
<body align="center" >
    <form method="post">
        
    <div class="passbox">
    <?php
    if (isset($_POST['submit']))
        
        echo $alert;
    ?>
    <?php
    if ( !empty($errorMessage) ) {
        echo "
        <strong>$errorMessage</strong>";

    }

    ?>
    <h1 class="adminbox">Admin User Only!</h1>

        <label class="lpass">Enter your Password!</label><br>
        <div class="textpass">
        <Input class type="password" name="pass">
        </div>
        <br>
        <button class="ebtn" name="submit">Enter</button>
        <br><br>
       <p2 >Not Admin? Go back <span><a href="aboutme.php" style="text-decoration: none; font-weight:bold; color:mediumspringgreen;">here</a></span></p2>
        </div>
    </form>
    
</body>
</html>