<?php 
  /* session_start(); // Démarrer la session si ce n'est pas déjà fait

   // Vérifier si l'utilisateur est connecté
   if(!isset($_SESSION['username'])) {
       // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
       header("Location: index.php");
       
   }

  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSentry</title>
    <link rel="icon" type="image/png" href="logo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>HydroSentry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="styleac.css">
</head>
<body >

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="logo">
                </span>
                <div class="text header-text">
                    <span class="name"><h1>HydroSentry</h1></span>
                    <span class="profession">welcome</span>
                </div>
            </div>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link"> 
                            <a href="home.php" class="home">
                                <i class='bx bxs-home icon' ></i> 
                                <span class="text nav-text ">Home</span>
                            </a>
                    </li>
                    <li class="nav-link">
                        <a href="data.php">
                            <i class='bx bxs-data icon' ></i>
                            <span class="text nav-text"> Visualisée Données</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="history.php">
                            <i class='bx bx-history icon' ></i>
                            <span class="text nav-text">Consulter Historique</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="user.php">
                            <i class='bx bxs-user icon' ></i>
                            <span class="text nav-text">Profil utilisateur</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="alert.php">
                            <i class='bx bxs-bell icon' ></i>
                            <span class="text nav-text">Notification</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="AI-RS.pdf" download="file.pdf">
                            <i class='bx bxs-file-doc icon' ></i>
                            <span class="text nav-text">Guide</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="deconnexion.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Déconnexion</span>
                    </a>
    
                </li>
            </div>
        </div>
        
    </nav>
    <section class="body">
        <section class="SlideSection">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <div class="slide first">
                        <img src="test3.png" alt="" >
                    </div>
                    <div class="slide">
                        <img src="test.png" alt="">
                    </div> 
                    <div class="slide">
                        <img src="test2.png" alt="">
                    </div> 
                    <div class="slide">
                        <img src="test4.png" alt="">
                    </div>
                    <div class="navigation-auto" >
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
        </section>
    </section>
    <script type="text/javascript">
        var counter=1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked=true;
            counter++;
            if(counter > 4){
                counter=1;
            }
        },5000);
    </script>

</body>
</html>