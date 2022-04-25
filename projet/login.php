<?php
$conn = new PDO("mysql:host=localhost;dbname=project;port=3307;charset=utf8" , 'root' , 'root');

if(!empty($_POST)){


$use=$_POST['username'];

  $requette= "SELECT * FROM utilisateurs WHERE username='$use'";
  $serch = $conn->query($requette);
     $user= $serch->fetch();
     var_dump($user);
      if(count($user) > 0 ){
        session_start();
        $_SESSION["username"] = $user['username'];
        $_SESSION["passwd"] = $user['passwd'];
        $_SESSION["typ"] = $user['typ'];
        if($_SESSION["typ"] == 'Admin'){
        header('location:test.php');
        }else{ 
        header('location:profile.php');}
        if(isset($_POST['check'])){
            setcookie('username',$_SESSION['username'],time() + 365*24*3600, null , false , true);
            setcookie('passwd',$_SESSION['passwd'],time() + 365*24*3600, null , false , true);
         }
      }
}
?>  

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Login2.css">
	<title></title>
   <style>
body {
  font-family: 'Rubik Moonrocks', cursive;
  background-color: rgb(218, 218, 218);

}
::placeholder {
    font-family: 'Rubik Moonrocks', cursive;
  font-size: 1.5em;
}

h1{
    margin-left: 80px;
}

.form{
   
    border: solid gray;
    width: 430px;
    margin-left: 430px;
    border-radius: 10px;
    background-color: rgb(255, 255, 255);
}
input{
    margin-top: 35px;
    margin-left: 20px;
   

}
.champ{
    padding: 15px;
    border-radius: 5px;
    width: 350px;
    margin-left: 25px;
    border: 0.55px solid gray;
}
.submit{
    padding: 10px;
    border-radius: 5px;
    margin: 20px;
    width: 350px;
    margin-bottom: 40px;
    margin-top: 40px;
}
input[type=submit] {
    font-family: 'Rubik Moonrocks', cursive;
    font-size: 20px;
    background-color: rgb(228, 228, 228);
    color: rgb(124, 124, 124);
}
.submit:hover{
    background-color: aliceblue;
    color: black;
    cursor: pointer;
    transition-duration: 1s;
}
#id{
   color:black;
}
.remember{

   position:relative;
   left:130px;
   top:20px;
}
.btn-login{
    position:relative;
    left:120px;
}


   </style>   
</head>
<body>

       <div class="form">
       <h1>Connexion</h1>
      <form name="fo" method="post" action="">
      <input class="champ" type="text" class="input-field" placeholder="Username" name="username" required value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'];?>"><br><br>
      <input class="champ" type="password" class="input-field" placeholder="Enter Password" name="passwd" required value="<?php if(isset($_COOKIE['passwd'])) echo $_COOKIE['passwd'];?>"><br><br>
      <div class="remember">
        <input id="check" type="checkbox" class="check-box" name='check' >          
        <label for="check">Remember me</label>
      </div>
      <input class="submit" type="submit" name="submit" value="log in" />
      <p class="btn-login"> Inscrivez-vous? | <a href="inscription.php">Sign Up</a></p>
      </form>
     </div>
     <script src="https://kit.fontawesome.com/d26ed27993.js" crossorigin="anonymous"></script>
</body>
</html>