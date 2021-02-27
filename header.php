<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width"/>
<link href = "fichierSuppProjet.css" rel = "stylesheet" />
</head>
<?php

session_start ();
$_SESSION["active"] = 1; 
?>
<body>
	<div class="header">
  
		    <a class="active" href="Acceuil.php">home</a>
		  
		    <a href="Choixquizz.php">quizz</a>
		    <a href="testLogin.php">se connecter / s'inscrire</a>
		    <a href ="AvisSite.php">Votre Avis </a>
		    <?php /*
		    include("search")
		   */ ?>
		<div class ="Emplacementlogin">	  
		  
			  <?php

						if (isset($_SESSION['pseudoDef']) && isset($_SESSION['passDef'])) 
					{

						echo 'login : '.$_SESSION['pseudoDef'] ;
						echo '<a href="./logout.php">Déconnection</a>';
					}
						else {

						echo '';
					}

				?>
		</div>

    </div>

 </body>

</html>
