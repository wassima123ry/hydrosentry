<?php 
    session_start();
  
?>
session_start();
    $db= new PDO('mysql:host=localhost;dbname=hsdb;charset=utf8;','root','');
    if(isset($_POST["boutton-valide"])){
        if(isset($_POST["username"]) && isset($_POST["password"])){
            $username = htmlspecialchars($_POST["username"]); //pour la sécurite
            $password = sha1($_POST["password"]); //pour cripter le mp
            $erreur="";
            $recupUser=$db->prepare("SELECT * FROM users WHERE id_client= ? AND pass= ?");
            $recupUser->execute(array($username,$password));
            if($recupUser->rowCount()> 0){
                    $_SESSION["id_client"]= $username;
                    $_SESSION["pass"]= $password;
                    $_SESSION["name"]=$recupUser->fetch()["name"];
                    echo $_SESSION["name"];
            }else{
                $erreur="votre mot de passe ou nom utilisateur incorrect";
        }
    }
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSentry</title>
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="stylesheet" href="style.css">
</head>
<body >
<section>
    <?php 
        echo"<p class='msg'>hello ".$_SESSION['name']." welcome to HydroSentry</p>";

    ?>
</section>
</body>
</html>