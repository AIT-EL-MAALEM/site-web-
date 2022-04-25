
<?php
$conn = new PDO("mysql:host=localhost;dbname=project;port=3307;charset=utf8" , 'root' , 'root');
session_start();
$user= $_SESSION["username"];
$typ= $_SESSION["typ"];
    if(isset($_SESSION["username"])){
        if($typ != 'Admin'){
            header('location: products.php');
          }
    }
       
       if(isset($_POST['upload'])){
        $nomProduit = htmlspecialchars($_POST['nomProduit']);
        $description = htmlspecialchars($_POST['description']);
        $srcImage = $_FILES["srcImage"]["name"];
        $dst="../aloha/";
        move_uploaded_file($_FILES["srcImage"]["tmp_name"],$dst.$_FILES["srcImage"]["name"]);
        $category = htmlspecialchars($_POST['category']);
        $sousCategory = htmlspecialchars($_POST['sousCategory']);
        $prix = htmlspecialchars($_POST['prix']);

$requette= "SELECT * FROM produits WHERE nomProduit='$nomProduit'";
$serch = $conn->query($requette);
   $pro= $serch->fetchAll();
   if(count($pro) > 0 ){ 
    echo ' this product already exist';
   }
   else{
        $sql = "INSERT INTO produits(nomProduit,prix,description,srcImage,categorie,sousCategorie) VALUES(?,?,?,?,?,?)";
        $insertion = $conn->prepare($sql);
            $insertion->execute([$nomProduit, $prix, $description, $srcImage, $category, $sousCategory]);
       }
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="addproduct.css">
    <style>
        body{
            background-color:#554;
            font-family: 'Josefin Sans', sans-serif;

        }
        .box{
            display:flex;
            justify-content:center;
            border:0.5px solid gray;
            border-raduis:10px;
            background-color:gray;
        }
        h1{
            margin-left:550px;
        }
        input{
            padding:20px;
            border-raduis:10px;
        }
        .submit{
            border-raduis:10px;
background-color:white;  
        }
        ::placeholder{
            font-family: Arial, Helvetica, sans-serif;

        }
    </style>
</head>
<body>
 <div class="tous">
    <div class="header">
        <h1>administration</h1>
    </div>
    <div class="box">
        <form action="addproduct.php" method="POST" enctype="multipart/form-data">
            <table Style="border-spacing: 50px;">
                <tr>
                    <td>Name of Product :</td>
                    <td><input type="text" name="nomProduit"></td>
                </tr>
                <tr>
                    <td>Description of product:</td>
                    <td><textarea name="description" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>Choose the image :</td>
                    <td><input type="file" name="srcImage"></td>
                </tr>
                    <td>Category :</td>
                    <td><select name="category" id="">
                        <option value="Phone">Phone</option>
                        <option value="Accessories">Accessories</option>
                        <option value="Laptops">Laptops</option>
                    </select></td>
                <tr>
                    <td>Sous Category :</td>
                    <td><input type="text" name="sousCategory"></td>
                </tr>
                <tr>
                    <td>Price :</td>
                    <td><input type="number" name="prix"></td>
                </tr>
                <tr>
                    <td><input type="Submit" name="upload" value="upload" class='submit'> </td>
                </tr>
            </table>
        </form>
    </div>
</div>
    
</body>
</html>