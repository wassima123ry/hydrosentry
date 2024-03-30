
<?php
//demarage du session 
    session_start();
    if(isset($_POST["boutton-valide"])){
        if(isset($_POST["username"]) && isset($_POST["password"])){
            $username =$_POST["username"];
            $password =$_POST["password"];
            $erreur="";
            //connexion a la base des données
            $nom_serveur="localhost";
            $nom_utilisateur="root";
            $mot_de_passe="";
            $nom_base_donnee="hsdb";
            $con = mysqli_connect($nom_serveur,$nom_utilisateur,$mot_de_passe,$nom_base_donnee);
            $req = mysqli_query($con,"SELECT * FROM users WHERE id_client='$username' AND pass='$password'");
            $num_ligne=mysqli_num_rows($req);
            if($num_ligne > 0){
                $row = mysqli_fetch_assoc($req);
                $username = $row['id_client'];
                $nom = $row['name']; // Récupérer la valeur du champ "nom"
                
                // Stocker le nom d'utilisateur et le nom dans la session
                $_SESSION['id_client'] = $username;
                $_SESSION['name'] = $nom;
                header("location:home.php");
                exit; // Arrêter l'exécution du script après la redirection
            }else{
                $erreur="votre mot de passe ou nom utilisateur incorrect";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSentry</title>
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
        <div class="background"></div>
        <div class="container">
            <div class="content">
                <h2 class="logo"><img src="logo.png" alt=""><b>HydroSentry</b></h2>
                <div class="text">
                    <h2>welcome ! <br> <span> To HydroSentry </span></h2>
                    <q>L'eau : vie , santé, prospérité , précieuse resource .</q>
                    <div class="social-icons">
                        <a href="#"><i class='bx bxl-linkedin'></i></a>
                        <a href="#"><i class='bx bxl-instagram' ></i></a>
                        <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                    </div>
                </div>
            </div>
            <div class="logreg-box">
                <div class="form-box">
                    <form action="" method="post">
                        <h1>Se connecter</h1>
                        <div class="input-box">
                            <span class="icon">
                                <i class='bx bxs-user' ></i>
                            </span>
                            <input type="text" name="username" id="" placeholder="Nom d'utilisateur">
                            <!--<label for="">Nom d'utilisateur</label>-->
                        </div>
                        
                        <div class="input-box">
                            <span class="icon">
                            <i class='bx bxs-lock-alt' ></i>
                            </span>
                            <input type="password" name="password" id="newPassword" placeholder="mot de passe">
                            <!--<label for="">mot de passe</label>-->
                        </div>
                        <div class="submit">
                            <input type="submit" value="Se connecter" name="boutton-valide">
                        </div>
                        <?php 
                            if(isset($erreur)){
                                echo "<p class= 'erreur'>".$erreur."</p>" ;
                            }
                        ?>
                    </form>
                    
                </div>
            </div>
        </div>
        
</body>
</html>