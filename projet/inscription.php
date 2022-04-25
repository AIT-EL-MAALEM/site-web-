

<?php
$conn = new PDO("mysql:host=localhost;dbname=project;port=3307;charset=utf8" , 'root' , 'root');
   session_start();
   @$nom=$_POST["nom"];
   @$prenom=$_POST["prenom"];
   @$login=$_POST["login"];
   @$pass=$_POST["pass"];
   @$repass=$_POST["repass"];
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      if(empty($nom)) $erreur="Nom laissé vide!";
      elseif(empty($prenom)) $erreur="Prénom laissé vide!";
      elseif(empty($prenom)) $erreur="Prénom laissé vide!";
      elseif(empty($login)) $erreur="Login laissé vide!";
      elseif(empty($pass)) $erreur="Mot de passe laissé vide!";
      elseif($pass!=$repass) $erreur="Mots de passe non identiques!";
      else{
         
         $sel=$conn->prepare("select username from utilisateurs where username=? limit 1");
         $sel->execute(array($login));
         $tab=$sel->fetchAll();
         if(count($tab)>0)
            $erreur="Login existe déjà!";
         else{
            $ins=$conn->prepare("insert into utilisateurs(nom,prenom,username,passwd,typ) values(?,?,?,?,?)");
            if($ins->execute(array($nom,$prenom,$login,md5($pass),'client')))
               header("location:login.php");
         }   
      }
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
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
    margin-left: 125px;
}
h2{
    margin-left: 140px;
    font-size: 1.5em;
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
.erreur{
   color:red;
   margin-left:10px;
}
      </style>
   </head>
   <body>
       <div class="form">
      <h1>Inscription</h1>
      <div class="erreur"><?php echo $erreur ?></div>
      <form name="fo" method="post" action="">
         <input class="champ" type="text" name="nom" placeholder="First-name" value="<?php echo $nom?>" /><br />
         <input class="champ" type="text" name="prenom" placeholder="Last-name" value="<?php echo $prenom?>" /><br />
         <input class="champ" type="text" name="login" placeholder="Username" value="<?php echo $login?>" /><br />
         <input class="champ" type="password" name="pass" placeholder="Password" /><br />
         <input class="champ" type="password" name="repass" placeholder="Confirm password" /><br />
         <input class="submit" type="submit" name="valider" value="S'authentifier" />
      </form>
     </div>
   </body>
</html>