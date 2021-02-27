<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width"/>
<link href = "fichierSuppProjet.css" rel = "stylesheet" />
</head>


<div class ="backQuizzChoixLogin">

<div class ="headerQuizzChoixLogin">
<?php
include ("header.php");
?>
</div>
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
$_SESSION["active"] = 1; 
// On récupère nos variables de session
if (isset($_SESSION['pseudoDef']) && isset($_SESSION['passDef'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';
?>
	<div class="cadreMembre">
		<div class ="konichiwa">
			<h1>
			<?php 
				echo 'KON\'NICHIWA &nbsp' .$_SESSION['pseudoDef'].' ,'.'<br />'; 

			?>

			</h1>
		</div>

		<div class ="titreInfo">
			<?php
				echo 'Les informations de votre compte :'.'<br />'; 
				echo '<br />';
			?>
		</div>

		<?php
			/*echo $_SESSION['id'];*/
			echo'Votre compte est assigné à  "'.$_SESSION['nom'].' '.$_SESSION['prenom'].' ".'.'<br />';
			echo' Votre mot de passe est "'.$_SESSION['passDef'].'".'.'<br />';
			echo'(pshiit ne le donnez à personne c\'est top secret)';
			echo '<br />';
			echo '<a href="./logout.php">Déconnection</a>';
			}
			else {
			echo 'Les variables ne sont pas déclarées.';
			}
		?>

	</div>


</div>

</html>