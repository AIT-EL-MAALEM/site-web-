<?php

// Create connection
$conn = new PDO("mysql:host=localhost;dbname=project;port=3307;charset=utf8" , 'root' , 'root');

// insertion des données du client :
if(isset($_POST['submit']))
{
    $CartName=$_POST['CardName'];
     $numeroCart=$_POST['cardNumber'];
     $month=$_POST['month'];
     $year=$_POST['year'];
     $cvv=$_POST['cvv'];

     /*
      avant d'inserer la carte il faut verifier qu'elle n'est pas deja enregistrer dans la base de données 
      c'est pour cela on effectue une requette qui calcule de le nbr d'apparition d'une carte dans bdd :
     */

     $verifCartQuery="SELECT * FROM `coordonnees` WHERE NumeroCart='$numeroCart';";
     $resultExist = $conn->query($verifCartQuery);
     $res= $resultExist->fetchAll();
     if(count($res) > 0 ){
              session_start();
    $use= $_SESSION["username"];
        $insertion="INSERT into coordonnees(NumeroCart,username,NomCart,ExpireMonth,ExpireYear,CVV) 
        values (?,?,?,?,?,?)";
        $insertion = $conn->prepare($sql);
        $insertion->execute([$numeroCart, $use, $CartName, $month, $year, $cvv]);
        
      }


      // inserer la commande :
       // selectionner les données de la table ligne de commande :
       //**************************** changer le userame dans les requettes sql par celui reçus dans la session :
       session_start();
       $use= $_SESSION["username"];

$sql = "SELECT lignecommand.idLigneCommand,(lignecommand.quantite*produits.prix ) as total
from produits, lignecommand
WHERE lignecommand.idProduit=produits.idProduit and username='$use'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    //pour chaque ligne on va inserer dans la table commande :
    $idLigneCom=$row["idLigneCommand"];
    $total=$row["total"];
    //requette d'insertion :
    $insert="INSERT INTO `command`(`idLigneCommand`, `total`) VALUES (?,?) " ;
    // execution de la requette :
    '',''
    $insertion = $conn->prepare($insert);
            $insertion->execute([$idLigneCom, $total]);
    if($insertion)
    {
                // on ajoute une confirmation de paiment
       include "confirmPaiment.html";
        
    }
    else{
        echo "error";
    }

}
}




?> 