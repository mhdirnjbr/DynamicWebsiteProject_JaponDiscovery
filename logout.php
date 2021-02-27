<?php
// On démarre la session
session_start ();
$_SESSION["active"] = 1; 
// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header ('location: Acceuil.php');
?>