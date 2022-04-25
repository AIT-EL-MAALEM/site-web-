<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="panier.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/d26ed27993.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="panier.js"></script>

</head>
<body>
    <!--navbar-->
    <nav class="navbar" id="main">
        <div class="logo"><a href="#" class="links active fnt"><h1>Folks</h1></a></div>
        <ul class="links-container">
            <li class="link-item"> <a href="#" class="links active pip fnt">Home</a></li>
            <li class="link-item"> <a href="#cat" class="links active pip fnt">Categories</a></li>
            <li class="link-item"> <a href="#" class="links active pip fnt">About</a></li>
            <li class="link-item"> <a href="#" class="links active pip fnt">Contact</a></li>
            <li>
                <?php
           echo' <form action="searsh.php" method="Post">
       <input type="text" name="requete" class="motor-recherche" placeholder="    Search">
       <input type="submit" value="Ok">
       </form>';
       ?>
            </li>
            
               
            </section>    
            </ul>
        <div class="user-interaction">
        <div class="cart">
                <a href="panier.php"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="user">
            <a href="profile.php"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </nav>
    
    <div class="wrapper">
        <h1>Shooping cart</h1>
        <div class="project">
            <div class="shop">



 <?php


// Create connection
$conn = new PDO("mysql:host=localhost;dbname=project;port=3307;charset=utf8" , 'root' , 'root');

session_start();
$use= $_SESSION["username"];

// selecting test
//**************************** changer le userame dans les requettes sql par celui reçus dans la session :
$sql = "select produits.*, lignecommand.quantite from produits,lignecommand WHERE lignecommand.idProduit=produits.idProduit and username='$use';";
$result = $conn->query($sql);
     $panier= $result->fetchAll();

     if(count($panier) > 0 ){
  // output data of each row
  foreach($panier as $row){
      
    print '  
    <div class="box">
    
    <img src= ../aloha/'.$row["srcImage"].' alt="">
    <div class="content">
        <h3>'.$row["nomProduit"].'</h3>
        <h4> Price By Unit : <span class="price">'.$row["prix"].'</span>dh</h4>
        <p class="unit">Quantity : 
        <input class="cart-quantity-input" name="qty" value="'.$row["quantite"].'" type="text" onchange="updateItem('.$row["idProduit"].',$(this).val())">
        <input id="itemQty'.$row["idProduit"].'" type="hidden" name="id" value="'.$row["idProduit"].'">
        </p>
        
        
            <input class="btn-area" id="itemToDelete'.$row["idProduit"].'" type="submit" name="deleteProduct" value="X" onclick="deleteItem('.$row["idProduit"].')">
      
        
        
        
    </div>
</div>';

  }

} else {
  echo "0 results";
}



?>


                <div class="last-bar">
                    <p ><span class="sbttl">Subtotal</span><span id="subt">1205dh</span> </p>
                    <hr>
                    <p><span>tax</span> 5dh</p>
                    <hr>
                    <p><span>Shipping</span> 12dh</p>
                    <hr>
                    <p><span class="ttl">total</span><span id="tl">1235dh</span> </p>
                   
                   
                    <a href="checkout.php"><i class="fa fa-shopping-cart"></i>Ckeckout</a>
  
                    
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>