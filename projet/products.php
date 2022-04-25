<?php
$conn = new PDO("mysql:host=localhost;dbname=project;port=3307;charset=utf8" , 'root' , 'root');
$category = $_GET['category'];
$sql = "SELECT DISTINCT sousCategorie FROM produits WHERE categorie = '$category'";
			$result = $conn->query($sql);
			
			$cat = $result->fetchAll();

			if(isset($_GET['souscategorie'])) {
				$sous = $_GET['souscategorie'];
				if($sous != 'ALL'){
				$sq ="SELECT * FROM produits WHERE sousCategorie = '$sous' AND categorie = '$category'";
				      $res = $conn->query($sq);
					  
					  $scat = $res->fetchAll();
				}else{
				$sq ="SELECT * FROM produits WHERE categorie = '$category'";
				$res = $conn->query($sq);
					  
				$scat = $res->fetchAll();
				}
			}else{
				$sq ="SELECT * FROM produits WHERE categorie = '$category'";
				$res = $conn->query($sq);
					  
				$scat = $res->fetchAll();
			}
			
				
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UACompatible" content="IE=edge">
	<title>Online Store - Home</title>
	<!-- <link rel="stylesheet" type="text/css" href="products.css"> -->
	<link rel="stylesheet" href="products.css?v=<?php echo time(); ?>">
    <!--link fontawesome-->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <script src="js/products.js"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&family=Rubik+Moonrocks&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&family=Rubik+Moonrocks&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}
.body{
    font-family: 'cinzel';
    background-color: #7c7c7c;
}
/*nav bar*/  

  
/* fin nav bar*/
.logo{
    position:absolute;
    top: 0px;
    right: 1243px; 
    }
    #log{
        width: 60px;
        height: 60px;
    }
    .logo a h1{
       
        font-family: 'Josefin Sans', sans-serif;
font-family: 'Rubik Moonrocks', cursive;
    }
  

.cart-item-count{
    font-size: 10px;
}
/*coloration navbar*/
.sticky{
    background: linear-gradient(gray,white);
   
}

.sticky1{
    color: #ce0000;
}
/* fin coloration*/
.categories{
    margin-top: 100px;
    margin-left: 525px;
    font-size: 400%;
}
div #categ3{
    width: 300px;
    height: 250px;
    margin-left: 39%;
    margin-top: 100px;
    border-radius: 8px;
    border: 20px solid #d5be8b ;

}
.fnt{
    font-family: 'Rubik Moonrocks', cursive;
}
body{
 
     background:linear-gradient(gray,white);
}
.motor-recherche{
    position :relative;
    left : 70px;
border-radius: 6px;
border: 1px solid black;
padding-top: 7px;
padding-bottom: 7px;
}

.fa-regular{
    margin-top: 6px;
}
.header-section{
    width: 100%;
    height: 100vh;
    background-image: url(../aloha/imac.jpg);
    background-size: cover;
    display: flex;
    justify-content: center;
     align-items: center;
}

.header-heading{
     font-size: 130px;
     text-transform: capitalize;
     font-family: 'Josefin Sans', sans-serif;
     font-family: 'Rubik Moonrocks', cursive;
     color: #fff;
     margin-right: 50px;
     position: relative;
     top: 30px;
    
}
.header-heading span{
     color: #000000;
}

.navbar{
    width: 100%;
    height: 80px;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    justify-content:center ;
    z-index:9;
    transition: 1.5s;
    color: #000000;

}

.links-container{
    display: flex;
    align-items: center;
    list-style: none;
}

.link-item{
    margin: 10px;
}

.links{
    font-size: 20px;
    color: #000000;
    text-decoration: none;
    padding:10px;
    opacity: 0.7;
    transition: 0.5s;
}

.links.active, .links:hover{
    opacity:1;
}
.links.active:hover{
    text-decoration: wavy;
    color: #413f3f;
}
.logo a:hover{
    text-decoration: none;
    color: #000000;
}
.user-interaction{
    display: flex;
    position: absolute;
    right: 5vw;
    top:50%;
    transform: translateY(-50%);
}

.cart, .user{
    width: 20px;
    height: 35px;
    position: relative;
    top: 10px;
    margin: 10px;
    cursor:pointer ;
}

.cart-icon, .user-icon{
    width: 100%;
    height: 100%;
    object-fit: cover;

}

.cart-item-count{
    font-family: Arial, Helvetica, sans-serif;
    color: #d5be8b;
    padding: 5px;
    font-size: 15px;
    border-radius: 50%;
    background: #190c05;
    position: absolute;
    bottom: -12px;
    left: -12px;
}
	</style>
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


		<?php
     print '<sction>     
	  <div class="container">
               <h3 class="title">'.$category.'</h3>
            <div class="tous active">
              <ul> 
                <div class="sous_category activee" id="all">
				<form>
				<a href="products.php?category='.$category.'&souscategorie=ALL"> 
                    <li>All</li>
				</a>	
                </div>';
				foreach($cat as $cats){
                echo '<div class="sous_category" id="all">
				<form>
                   <a href="products.php?category='.$category.'&souscategorie='.$cats["sousCategorie"].'"> 
				   <li>'.$cats["sousCategorie"].'</li></a>
				</form>	
                </div>';
				}
              echo '</ul> 
            </div>';
			
			$cmt=0;
			echo'<table Style="border-spacing: 50px;">';
			
            foreach($scat as $scats){
				
				if($cmt%3 == 0){echo'<tr><td>';
				echo '<div class="product_container">
             <div  class="product" Data-name="p-1">
			 <a href="details.php?idProduit='.$scats["idProduit"].'">
			 <img class="imm" src="../aloha/'.$scats["srcImage"].'"alt=""></a>
			 <div class="price">'.$scats["prix"].'$</div>
			 <p class="product_name">'.$scats["nomProduit"].' -></p>
			 </div>
	
              </div>';
			  echo'</td>';
			  echo'<td width="5%"></td>';}
			  else{
				echo'<td>';
				echo '<div class="product_container">
             <div  class="product" Data-name="p-1">
			 <a href="details.php?idProduit='.$scats["idProduit"].'">
			 <img class="imm" src="../aloha/'.$scats["srcImage"].'"alt=""></a>
			 <div class="price">'.$scats["prix"].'$</div>
			 <p class="product_name">'.$scats["nomProduit"].' -></p>
			 </div>
	
              </div>';
			  echo'</td>';
			  echo'<td width="5%"></td>';
			  
			  }

			$cmt++;
			}
			
			echo'</tr></table>';
			?>
			
               
        </section>
      
	

  
 

   
    <!--Script-->
<script src="products.js"></script>      
<script src="https://kit.fontawesome.com/d26ed27993.js" crossorigin="anonymous"></script>

<script>
	  $("li").click(function(){
	 	$("li").css("color","");
	 	$(this).css("color","red");
	 });
</script>
</body>
</html>