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
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>View Comment</title>
</head>
<div class="headview">
    <h1 style="color: black;">List of Inquiry</h1><a href="aboutme.php">
    <button style="border: none; font-size:30px; cursor:pointer" title="Back to Home?" class="bi bi-arrow-bar-left" text="Back to Home"></button></a>
    </div>

<body style="background-color: aliceblue;">
    <table class="tuser" >
        <thead>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td align="center">COMMENTS</td>
            <td align="center">DELETE</td>
        </tr>
        </thead>

<?php
        $sql = "SELECT * FROM inquiry";
        $query = mysqli_query($con, $sql);

        if ($query)
        {
            while($row = mysqli_fetch_array($query))
    
            {

?>
        <tbody>
            <tr>
            <th><?php echo $row["id"];?></th>
            <th><?php echo $row["name"];?></th>
            <th><?php echo $row["email"];?></th>
            <th align="center"><?php echo $row["comment"];?></th>
            <div >

            <form action="delete.php" method="post"; >
                <input  type="hidden" name="id" value="<?php echo $row['id'];?>">
                <th align="center" class="idelete"><button  type="submit" name="delete" class="bi bi-folder-x" style="border: none; font-size:30px;cursor:pointer;" title="Delete from Database?"value="delete"></button></th>
            </form>
            </tr>
        </tbody>
        <?php
            }
        }
    ?>
    </table>

</body>
</html>