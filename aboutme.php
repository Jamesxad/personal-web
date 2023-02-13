<?php
include "db.php";
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


<title>ABOUT ME</title>
</head>
<div class="modalpassword">
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</div>
    <div class="nav">
        <ul>
            <li>
            <a href="#home">
             <h2>HOME</h2></a>
            </li>
            <li>
             <a href="#info">
                <h2>INFO</h2></a>
                 </li>
            <li>
                <a href="#skills">
                <h2>SKILLS</h2></a>
            </li>
            <li>
                <a href="login.php">
                <h2>COMMENTS</h2></a>
            </li>
                
            
        </ul>
    </div>

    <div id="home" class="hyptxt">
    <h1>PERSONAL PAGE</h1>
    <img src="profile.png">
    <h2>James Advincula</h2>
    <p1 >FRONT WEB DEVELOPER</p1>
    
</div>
    <div id="info" class="infobox">
    <h2>PERSONAL INFO</h2>
    <ul>
        <li>AGE<br>
            <p2><span> 35</p2>
        </li>
        <li>EDUCATIONAL BACKGROUND<br>
            <p2><span>-ASSOCIATE IN COMPUTER SCIENCE</p2>
        </li>
        <li>WORK EXPERIENCE<br>
            <p2><span>-THE REAL AMERICAN DOUGHNUT CO INC (KRISPY KREME)<br>SHIFT MANAGER 2013-2023)</p2>
        </li>
    </ul></span></span></span>
    </ul>
    </ul>
    </div>

    
<body>
    <h2>SKILLS</h2>
    <section id="skills" class="navskills">
        
        <ul>
            <li>
                <h3>ADOBE PHOTOSHOP</h3>
                <span class="bar"><span class="ADOBE"></span></span>
                <br>
            </li>
            <li>
                <h3> HTML </h3>
                <span class="bar"><span class="HTML"></span></span>
            <br>
            </li>
            <li>
                <h3>CSS</h3>
                <span class="bar"><span class="CSS"></span></span>
           <br>
            </li>
            <li>
                <h3>JAVASCRIPT </h3>
                <span class="bar"><span class="JAVA"></span></span>
                    <br>
            </li>
            <li>
                <h3> PHP</h3> 
                <span class="bar"><span class="PHP"></span></span>
                    <br>
            </li>
        </ul>
</section>


</body><br>
<footer >
 <div class="cbox">
        <h2>CONTACT ME</h2>

<div class="icon">
    <ul>
        <li>
        <a href="http://facebook.com">
        <i class="bi bi-facebook">
         James Advincula</a></i></li>
        <li><a href="http://youtube.com">
            <i class="bi bi-youtube">
                 Youtube</a></i>
                <br></li>
        <li><a href="https://mail.google.com/mail?view=cm&to=Jamesxadvincula@gmail.com">
                    <i class="bi bi-google"> Email me!</a></i>
                </li>
                </ul>
                </div>
        <br>
        
<?php

if(isset($_POST["name"]) &&
isset($_POST["email"]) && 
isset($_POST["comment"])){

$name = "";
$email =  "";
$comment =  "";
$alert="";
$errorMessage="";


    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];



    if ( empty($name) &&  empty($email) ) {
    $errorMessage = "Please type your Name and Email before submiting! <br>";

    }else{

$s = " INSERT INTO inquiry (name, email, comment)" . 
   "VALUES ('$name', '$email' ,'$comment')" ;

   $check = $con->query($s);

   if ($check === TRUE) {
    echo  '<script>alert( "Thank you  ' .$name .' for Inquiry! ")</script>';
  } else {
    echo "Error: " . $s . "<br>" . $con->error;
  }
    }
}
}
?>
        <form method="post">
            <br>
            <?php
    if ( !empty($errorMessage) ) {
        echo "
        <strong>$errorMessage</strong>";
        

    }
    ?>
    <br>

        <input  type="text" name="name" value=""placeholder="Name"><br>
            <input type="email" name="email"value="" placeholder="Email Address"><br>
            <textarea name="comment" value="" placeholder="Type your Comment here"></textarea><br>
           
             <button id="btn" type="submit" name="submit"><b> Submit</b></button></form>
    </div></div>

    <form>
    <p class="stripecolor"></p >

</footer>


</html>