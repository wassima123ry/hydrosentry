
<?php
session_start(); // Démarrer la session si ce n'est pas déjà fait

// Vider toutes les variables de session
$_SESSION = [];

// Détruire la session
session_destroy();

// Empêcher la mise en cache de la page précédente
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Rediriger vers la page de connexion ou une autre page appropriée
echo '<script>window.location.href = "index.php";</script>';
exit();
?>