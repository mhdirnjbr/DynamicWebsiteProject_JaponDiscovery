<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width"/>
<link href = "fichierSuppProjet.css" rel = "stylesheet" />
<title>Inscription/Connection</title>
</head>







	<?php
	
$serveur = new mysqli('127.0.0.1','root','root','Japon','8889');
if ( $serveur -> connect_errno){
	die("<p>ERROR : echec connection à la base de donnée </p>");
}
else {
	echo"";
}

?>



<?php
if (isset($_POST['valider']))
{
	$prenom = htmlspecialchars($_POST['prenom']);
 	$nom = htmlspecialchars($_POST['nom']);
 	$pseudo = htmlspecialchars($_POST['pseudo']);
 	$email = htmlspecialchars($_POST['email']);
 	$password = sha1($_POST['pass']);
 	$Verifpassword = sha1($_POST['Verifpass']);

	if ( !empty ($_POST['nom']) AND !empty ($_POST['prenom']) AND !empty ($_POST['pseudo']) AND!empty ($_POST['pass']) 
		AND !empty ($_POST['Verifpass']) )	
	{

 $pseudolength= strlen([$pseudo]);

if ($pseudolength<=255)
	
	{
			
		 if($password==$Verifpassword)
		 {	
			if ( empty ($_POST['email']) OR filter_var($email,FILTER_VALIDATE_EMAIL)) /* verifier l'email bcp mieu que pattern car pas modifable dans inspecter  */

		 	{
		 		
			$creation = "INSERT INTO  user(prenom,nom,pseudo,email,password) VALUES ('$prenom', '$nom', '$pseudo','$email','$password')";
			$data = $serveur-> query($creation);
			$erreurI="votre compte a bien été créé ! FELICITATION";



}
		else 
		 {
		 	$erreurI="DSL! Votre email n'est pas conforme !";
		 }
		}
		 else 
		 {
 	$erreurI="DSL! Vos mots de passe renseignés ne sont pas identiques !";
 		}

	 
}
else 
	{
		$erreurI="DSL ! Votre pseudo ne peut dépasser 255 caractères!";
		}

	}
	else {
		$erreurI = "Veuillez remplir tous les champs obligatoires pour vous inscrire ";
	}
}


?>




<?php

							 
	if (isset($_POST['valider2'])){
		$login_valide = htmlspecialchars($_POST['pseudoDef']);
		$pwd_valide = sha1($_POST['passDef']);
		

				if (!empty($_POST['pseudoDef']) && !empty($_POST['passDef'])) 
						{        
									$validation= "SELECT prenom FROM user WHERE pseudo = '$login_valide'";
									$data= $serveur-> query($validation);
									/*echo "<pre>";print_r($validation); echo "</pre>";*/

									while ($rowP = $data->fetch_assoc()) {
											foreach ($rowP as $valueP) 
												echo "<td> {$valueP} </td>";     
											
									} 


									$validationAll="SELECT nom FROM user WHERE pseudo = '$login_valide' AND password = '$pwd_valide'";
									$data = $serveur-> query($validationAll);
									/*print_r($validationAll);*/

									while ($rowPM = $data->fetch_assoc()) {
											foreach ($rowPM as $valuePM) 
												echo "<td> {$valuePM} </td>";     
											
									} 

									$id="SELECT id_user FROM user WHERE pseudo = '$login_valide' AND password = '$pwd_valide'";
													$data = $serveur-> query($id);
													while ($rowID = $data->fetch_assoc()) 
													{
														foreach ($rowID as $valueID) 
														echo "";
													}
							if (!empty($valueP))
							{							
										
									if (!empty($valuePM))
										 {
										 	$erreurC="tout est ok";
											session_start ();
											$_SESSION["active"] = 1; 
											$_SESSION['pseudoDef'] = $_POST['pseudoDef'];
											$_SESSION['passDef'] = $_POST['passDef'];
											$_SESSION['prenom'] = $valueP;
											$_SESSION['nom'] = $valuePM;
											$_SESSION['id']=$valueID;





											header ('location: page_membre.php');
										 }
									else {

										$erreurC = "DSL ! Mauvais mot de passe ou mauvais identifant ";
										}				
							}
							else {
								$erreurC="DSL ! Aucun compte n'est associé à ce pseudo , si vous n'avez pas de compte créez en un et rejoignez nous !";
							}

					}	
				else {
						$erreurC = "Veuillez remplir tous les champs obligatoires pour vous connecter";
					}
	}


?> 


	<body>

<div class = "backQuizzChoixLogin">
  
<div class="headerQuizzChoixLogin">
	<?php
	include ("header.php");
	?>
</div>

	<div class="inscription">

		<form  method ="POST" action =" " >
		<h1>CRÉATION DE VOTRE COMPTE PERSONNEL : </h1>

		<p>La création de votre compte vous permettra de profiter pleinement de notre site afin de laisser votre avis et affronter vos amis sur nos quiz : </p>
		<p> Les champs notés avec une etoiles(*) sont obligatoires. </p>
		<br></br>
		<label for= "nom"> *  nom  : </label>
		<input type="text" name="nom" id="nom" placeholder="nom" value =" <?php  if(isset ($nom)){  echo $nom; } ?>" /><br><br>
  
		<label for= "prénom">*  prénom  : </label> 
		<input type="text" name="prenom" id="prenom" placeholder="prénom" value =" <?php  if(isset ($prenom)){  echo $prenom; } ?>"/><br><br>

		<label for= "pseudo">*  Saisissez votre pseudonyme (non modifiable par la suite):</label> 
		<input type="text" name="pseudo" id="pseudo" placeholder="pseudo" value =" <?php  if(isset ($pseudo)){  echo $pseudo; } ?>"/><br><br>	

    	<label for="pass">*  Saisissez votre mot de passe (sans caractère spéciaux ) :</label>
        <input type="password" name="pass" id="pass" placeholder="mdp" /><br><br>

    	<label for="Verifpass">*  Veuillez confirmer votre mot de passe :</label>
        <input type="password" name="Verifpass" id="Verifpass" placeholder="mdp" /><br><br>

		<label for= "mail">  email  : </label>
		<input type="email" name="email" id="email" placeholder="email" value =" <?php  if(isset ($email)){  echo $email; } ?>"/><br><br>
     
		<label> cliquez ici pour envoyer votre formulaire --> </label>
		<input type ="submit" name="valider" placeholder="envoyer"><br>
		</form>

		<?php
		if ( isset ($erreurI))
		{
		echo'<font color="red">'. $erreurI .'</font>';
		}
		
		?>

	</div>



	<div class ="connection">
		<form method ="POST" action =" " >
		<h1>CONNECTION</h1>
		<p>SAISISSEZ VOS IDENTIFIANTS AFIN D'ACCÈDER A VOTRE COMPTE</p>
<p> Les champs notés avec une etoiles(*) sont obligatoires. </p>
		<label for= "pseudoDef">*  Saisissez votre pseudonyme :</label> 
		<input type="text" name="pseudoDef" id="pseudoDef" placeholder="pseudo" /><br><br>	

 		<label for="passDef">*  Saisissez votre mot de passe (sans caractère spéciaux ) :</label>
        <input type="password" name="passDef" id="passDef" placeholder="mot de passe"  /><br><br>

        <label> cliquez ici pour vous connecter --> </label>
		<input type ="submit" name="valider2" placeholder="envoyer"><br>
		</form>

		<?php
		if ( isset ($erreurC));
		{

		echo'<font color = "red" >'. $erreurC .'</font>';

		}
		//include ("avisH.php");
		?>
</div>

</div>
</div>

	</body>

</html>

