

<?php


// Create connection
$conn = new PDO("mysql:host=localhost;dbname=project;port=3307;charset=utf8" , 'root' , 'root');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//**************************************************************************************** */

// partie de traitement sur les clients :
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

function update()
{
    global $conn;

    $username=$_POST["username"];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $passwd=$_POST["passwd"];
    $typ=$_POST["typ"];
    $sql="UPDATE `utilisateurs` SET `nom`='$nom',`prenom`='$prenom',`passwd`='$passwd',`typ`='$typ' WHERE username='$username'";
    $result = $conn->query($sql);
    echo 1;
}

function delete(){
    global $conn;

    $username=$_POST["username"];
    $sql = "DELETE FROM `utilisateurs` WHERE username='$username'";
    $result = $conn->query($sql);
    echo 1;
}

$conn->close();

?>