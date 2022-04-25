
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="clients.js"></script>
    <title>clients</title>
</head>
<body>
    <h1>Listes des clients</h1>

    <div class="wrp">
        <div id="bx">
            <div class="contentHead" id="contentH">
                <h4>nom</h4>
                <h4>prenom</h4>
                <h4 >username</h4>
                <h4>password</h4>
                <h4>type</h4>
                <h4>Operations</h4>
            </div>
        </div>
</div>


    

    <?php



// Create connection
$conn = new PDO("mysql:host=localhost;dbname=project;port=3307;charset=utf8" , 'root' , 'root');

// selecting test
$sql = "SELECT * from utilisateurs;";
$result = $conn->query($sql);
     $user= $result->fetchAll();

     if(count($user) > 0 ){
        // output data of each row
        foreach($user as $row){
      print ' <div class="wrapper">
      <div class="box">
          <div class="content">
            <input type="text" value="'.$row["nom"].'" id="email" class="nom">
            <input type="text" value="'.$row["prenom"].'" id="email" class="prenom">
             <input type="text" value="'.$row["username"].'" readonly class="username">
             <input type="text" value="'.$row["passwd"].'" class="passwd">
             <input type="text" value="'.$row["typ"].'" class="typ">
             <input type="submit" value="alter" name="alter" class="btn alter" >
             <input type="submit" value="delete" name="delete" class="btn delete"   >
          </div>
      </div>
  </div>';

}
}





?>




</body>
</html>