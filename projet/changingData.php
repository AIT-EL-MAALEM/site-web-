<?php

// Create connection
$conn = new PDO("mysql:host=localhost;dbname=project;port=3307;charset=utf8" , 'root' , 'root');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//**************************************************************************************** */
if(isset($_POST["action"])){


    // si l'action qu'on veut est pour update :
    if($_POST["action"]=="update")
    {
        update();
    }

        // si l'action qu'on veut est pour delete :
        if($_POST["action"]=="delete")
        {
            delete();
        }
}




// les fonctions utilsés :

function update()
{
    global $conn;

    session_start();
    $use= $_SESSION["username"];

    $id=$_POST["id"];
    $qty=$_POST["qty"];

    //**************************** changer le userame dans les requettes sql par celui reçus dans la session :

    $sql = "UPDATE `lignecommand` SET `quantite`=$qty WHERE idproduit=$id and username='$use'";
    mysqli_query($conn,$sql);
    echo 1;
}



function delete(){
    global $conn;

    $id=$_POST["id"];
    
    session_start();
    $use= $_SESSION["username"];
    //**************************** changer le userame dans les requettes sql par celui reçus dans la session :
    $sql = "DELETE FROM `lignecommand` WHERE idProduit=$id and username='$use'";
    mysqli_query($conn,$sql);
    echo 1;
}
//------------------
?> 