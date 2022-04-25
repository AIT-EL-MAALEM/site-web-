<?php

session_start();
if($_GET['logout']==1) {session_destroy();}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Your Profile</title>
</head>
<body>
    <h1>welcome to your profile Mr <?php   echo $_SESSION["username"];  ?> </h1>

    
<a href="profile.php?logout=1"><button>Deconected</button></a>

</body>
</html>