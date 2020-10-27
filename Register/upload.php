<?php

include 'connect_DB.php';


$selectquery = "select * from usersdb";


  $query = mysqli_query($conn, $selectquery);
  $fetch = mysqli_fetch_array($query);



  $_SESSION['username'] = $fetch['username'];
  $_SESSION['photo'] = $fetch['photo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <?php 
        echo "<img src='usersdb/".$fetch['photo']."'>";

        ?>
    </center>
    <?php
    echo $_SESSION['username'];
    
    ?>

<img src="<?php print $_SESSION['photo']?>" alt="">

</body>
</html>