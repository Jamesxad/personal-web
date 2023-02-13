<?php
include "db.php";

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $sql = "DELETE FROM inquiry WHERE id='$id'";
    $query = mysqli_query($con,$sql);

    if($query)
    {
        echo '<script> alert("data deleted")</script>';
        header("location: /personalweb/viewcom.php");
        
    }
    else
    {
        echo '<script> alert("data not deleted")</script>';
    }
}

?>